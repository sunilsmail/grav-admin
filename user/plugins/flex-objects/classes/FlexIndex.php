<?php
namespace Grav\Plugin\FlexObjects;

use Grav\Common\Debugger;
use Grav\Common\Grav;
use Grav\Framework\Object\Interfaces\ObjectCollectionInterface;
use Grav\Framework\Object\Interfaces\ObjectInterface;
use Grav\Plugin\FlexObjects\Collections\ArrayIndex;
use PSR\SimpleCache\InvalidArgumentException;

class FlexIndex extends ArrayIndex // implements ObjectCollectionInterface
{
    /** @var FlexDirectory */
    private $flexDirectory;

    /**
     * Initializes a new IndexCollection.
     *
     * @param array $entries
     * @param FlexDirectory $flexDirectory
     */
    public function __construct(array $entries, FlexDirectory $flexDirectory)
    {
        parent::__construct($entries);

        $this->flexDirectory = $flexDirectory;
    }

    /**
     * @return FlexDirectory
     */
    public function getFlexDirectory()
    {
        return $this->flexDirectory;
    }

    /**
     * @param bool $prefix
     * @return string
     */
    public function getType($prefix = true)
    {
        $type = $prefix ? $this->getTypePrefix() : '';

        return $type . $this->flexDirectory->getType();
    }

    /**
     * @return string[]
     */
    public function getStorageKeys()
    {
        // Get storage keys for the objects.
        $keys = [];
        foreach ($this->getEntries() as $key => $value) {
            $keys[\is_array($value) ? $value[0] : $key] = $key;
        }

        return $keys;
    }

    /**
     * @return int[]
     */
    public function getTimestamps()
    {
        // Get storage keys for the objects.
        $timestamps = [];
        foreach ($this->getEntries() as $key => $value) {
            $timestamps[$key] = \is_array($value) ? $value[1] : $value;
        }

        return $timestamps;
    }

    /**
     * @return string
     */
    public function getCacheKey()
    {
        return $this->getType(true) . '.' . sha1(json_encode($this->getKeys()));
    }

    /**
     * @return string
     */
    public function getCacheChecksum()
    {
        return sha1($this->getCacheKey() . json_encode($this->getTimestamps()));
    }

    /**
     * @param array $orderings
     * @return FlexIndex|FlexCollection
     */
    public function orderBy(array $orderings)
    {
        if (!$orderings) {
            return $this;
        }

        // Check if ordering needs to load the objects.
        if (array_diff_key($orderings, ['key' => true, 'storage_key' => true, 'timestamp' => true])) {
            return $this->__call('orderBy', [$orderings]);
        }

        // Ordering can be done by using index only.
        $previous = null;
        foreach (array_reverse($orderings) as $field => $ordering) {
            switch ($field) {
                case 'key':
                    $keys = $this->getKeys();
                    $search = array_combine($keys, $keys);
                    break;
                case 'storage_key':
                    $search = array_flip($this->getStorageKeys());
                    break;
                case 'timestamp':
                    $search = $this->getTimestamps();
                    break;
                default:
                    continue 2;
            }

            // Update current search to match the previous ordering.
            if (null !== $previous) {
                $search = array_replace($previous, $search);
            }

            // Order by current field.
            if ($ordering === 'DESC') {
                arsort($search, SORT_NATURAL);
            } else {
                asort($search, SORT_NATURAL);
            }

            $previous = $search;
        }

        return $this->createFrom(array_replace($previous, $this->getEntries()));
    }

    /**
     * {@inheritDoc}
     */
    public function call($method, array $arguments = [])
    {
        return $this->__call('call', [$method, $arguments]);
    }

    public function __call($name, $arguments)
    {
        /** @var Debugger $debugger */
        $debugger = Grav::instance()['debugger'];

        /** @var FlexCollection $className */
        $className = $this->flexDirectory->getCollectionClass();
        $cachedMethods = $className::getCachedMethods();

        if (!empty($cachedMethods[$name])) {
            $key = $this->getType(true) . '.' . $name . '.' . sha1($name . json_encode($arguments) . $this->getCacheKey());

            $cache = $this->flexDirectory->getCache('object');

            $test = new \stdClass;
            try {
                $result = $cache->get($key, $test);
            } catch (InvalidArgumentException $e) {
                /** @var Debugger $debugger */
                $debugger = Grav::instance()['debugger'];
                $debugger->addException($e);

                $result = $test;
            }

            if ($result === $test) {
                $result = $this->loadCollection()->{$name}(...$arguments);

                try {
                    // If flex collection is returned, convert it back to flex index.
                    if ($result instanceof FlexCollection) {
                        $cached = $result->getFlexDirectory()->getIndex($result->getKeys());
                    } else {
                        $cached = $result;
                    }

                    $cache->set($key, $cached);
                } catch (InvalidArgumentException $e) {
                    $debugger->addException($e);

                    // TODO: log error.
                }
            }
        } else {
            $collection = $this->loadCollection();
            $result = $collection->{$name}(...$arguments);
            $class = get_class($collection);
            $debugger->addMessage("Call '{$class}:{$name}()' cannot be cached", 'debug');
        }

        return $result;
    }

    /**
     * @return string
     */
    public function serialize()
    {
        return serialize(['type' => $this->getType(false), 'entries' => $this->getEntries()]);
    }

    /**
     * @param string $serialized
     */
    public function unserialize($serialized)
    {
        $data = unserialize($serialized);

        $this->flexDirectory = Grav::instance()['flex_objects']->getDirectory($data['type']);
        $this->setEntries($data['entries']);
    }

    /**
     * @param array $entries
     * @param array $indexes
     * @return static
     */
    protected function createFrom(array $entries)
    {
        return new static($entries, $this->flexDirectory);
    }

    /**
     * @return string
     */
    protected function getTypePrefix()
    {
        return 'i.';
    }

    /**
     * @param string $key
     * @param mixed $value
     * @return ObjectInterface|null
     */
    protected function loadObject($key, $value)
    {
        $objects = $this->flexDirectory->loadObjects([$key => $value]);

        return $objects ? reset($objects) : null;
    }

    /**
     * @param array|null $entries
     * @return ObjectInterface[]
     */
    protected function loadObjects(array $entries = null)
    {
        return $this->flexDirectory->loadObjects($entries ?? $this->getEntries());
    }

    /**
     * @param array|null $entries
     * @return ObjectCollectionInterface
     */
    protected function loadCollection(array $entries = null)
    {
        return $this->flexDirectory->loadCollection($entries ?? $this->getEntries());
    }

    /**
     * @param mixed $value
     * @return bool
     */
    protected function isAllowedObject($value)
    {
        return $value instanceof FlexObject;
    }
}
