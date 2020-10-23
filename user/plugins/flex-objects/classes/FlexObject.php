<?php
namespace Grav\Plugin\FlexObjects;

use Grav\Common\Data\ValidationException;
use Grav\Common\Debugger;
use Grav\Common\Grav;
use Grav\Common\Media\Interfaces\MediaInterface;
use Grav\Common\Page\Medium\Medium;
use Grav\Common\Page\Medium\MediumFactory;
use Grav\Common\Twig\Twig;
use Grav\Framework\ContentBlock\HtmlBlock;
use Grav\Framework\Object\LazyObject;
use Grav\Plugin\FlexObjects\Interfaces\FlexObjectInterface;
use Psr\SimpleCache\InvalidArgumentException;
use RocketTheme\Toolbox\Event\Event;
use RocketTheme\Toolbox\ResourceLocator\UniformResourceLocator;

/**
 * Class FlexObject
 * @package Grav\Plugin\FlexObjects
 */
class FlexObject extends LazyObject implements FlexObjectInterface
{
    /** @var FlexDirectory */
    private $flexDirectory;
    /** @var string */
    private $storageKey;
    /** @var int */
    private $timestamp = 0;

    /**
     * @return array
     */
    public static function getCachedMethods()
    {
        return [
            'getTypePrefix' => true,
            'getType' => true,
            'getFlexDirectory' => true,
            'getCacheKey' => true,
            'getCacheChecksum' => true,
            'getTimestamp' => true,
            'value' => true,
            'exists' => true,
            'hasProperty' => true,
            'getProperty' => true,
        ];
    }

    /**
     * @param array $index
     * @return array
     */
    public static function createIndex(array $index)
    {
        return $index;
    }

    /**
     * @param array $elements
     * @param string $key
     * @param FlexDirectory $flexDirectory
     * @param bool $validate
     * @throws \InvalidArgumentException
     * @throws ValidationException
     */
    public function __construct(array $elements = [], $key, FlexDirectory $flexDirectory, $validate = false)
    {
        $this->flexDirectory = $flexDirectory;

        if ($validate) {
            $blueprint = $this->getFlexDirectory()->getBlueprint();

            $blueprint->validate($elements);

            $elements = $blueprint->filter($elements);
        }

        $this->filterElements($elements);

        parent::__construct($elements, $key);
    }

    /**
     * @param array $data
     * @param bool $isFullUpdate
     * @return $this
     * @throws ValidationException
     */
    public function update(array $data, $isFullUpdate = false)
    {
        $this->filterElements($data);

        $blueprint = $this->getFlexDirectory()->getBlueprint();

        if (!$isFullUpdate) {
            $elements = $this->getElements();
            $data = $blueprint->mergeData($elements, $data);
        }

        $blueprint->validate($data + ['storage_key' => $this->getStorageKey()]);

        $this->setElements($blueprint->filter($data));

        return $this;
    }

    /**
     * @return string
     */
    protected function getTypePrefix()
    {
        return 'o.';
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
     * @return FlexDirectory
     */
    public function getFlexDirectory()
    {
        return $this->flexDirectory;
    }

    /**
     * @return \Grav\Common\Data\Blueprint
     */
    public function getBlueprint()
    {
        return $this->flexDirectory->getBlueprint();
    }

    /**
     * @return \Grav\Common\Data\Blueprint
     * @deprecated Admin compatibility
     */
    public function blueprints()
    {
        return $this->flexDirectory->getBlueprint();
    }

    /**
     * @return string
     */
    public function getCacheKey()
    {
        return $this->getType(true) .'.'. $this->getStorageKey();
    }

    /**
     * @return int
     */
    public function getCacheChecksum()
    {
        return $this->getTimestamp();
    }

    /**
     * @return string
     */
    public function getStorageKey()
    {
        return $this->storageKey;
    }

    /**
     * @param string|null $key
     * @return $this
     */
    public function setStorageKey($key = null)
    {
        $this->storageKey = $key;

        return $this;
    }

    /**
     * @return int
     */
    public function getTimestamp()
    {
        return $this->timestamp;
    }

    /**
     * @param int $timestamp
     * @return $this
     */
    public function setTimestamp($timestamp = null)
    {
        $this->timestamp = $timestamp ?? time();

        return $this;
    }

    /**
     * @param string $layout
     * @param array $context
     * @return HtmlBlock
     * @throws \Exception
     * @throws \Throwable
     * @throws \Twig_Error_Loader
     * @throws \Twig_Error_Syntax
     */
    public function render($layout = null, array $context = [])
    {
        if (null === $layout) {
            $layout = 'default';
        }

        $grav = Grav::instance();

        /** @var Debugger $debugger */
        $debugger = $grav['debugger'];
        $debugger->startTimer('flex-object-' . ($debugKey =  uniqid($this->getType(false), false)), 'Render Object ' . $this->getType(false));

        $cache = $key = null;
        if (!$context) {
            $key = $this->getCacheKey() . '.' . $layout;
            $cache = $this->flexDirectory->getCache('render');
        }

        try {
            $data = $cache ? $cache->get($key) : null;

            $block = $data ? HtmlBlock::fromArray($data) : null;
        } catch (InvalidArgumentException $e) {
            $debugger->addException($e);

            $block = null;
        } catch (\InvalidArgumentException $e) {
            $debugger->addException($e);

            $block = null;
        }

        $checksum = $this->getCacheChecksum();
        if ($block && $checksum !== $block->getChecksum()) {
            $block = null;
        }

        if (!$block) {
            $block = HtmlBlock::create($key);
            $block->setChecksum($checksum);

            $grav->fireEvent('onFlexObjectRender', new Event([
                'object' => $this,
                'layout' => &$layout,
                'context' => &$context
            ]));

            $output = $this->getTemplate($layout)->render(
                ['grav' => $grav, 'block' => $block, 'object' => $this, 'layout' => $layout] + $context
            );

            $block->setContent($output);

            try {
                $cache && $cache->set($key, $block->toArray());
            } catch (InvalidArgumentException $e) {
                $debugger->addException($e);
            }
        }

        $debugger->stopTimer('flex-object-' . $debugKey);

        return $block;
    }

    /**
     * Form field compatibility.
     *
     * @param  string $name
     * @param  mixed  $default
     * @return mixed
     */
    public function value($name, $default = null)
    {
        if ($name === 'storage_key') {
            return $this->getStorageKey();
        }

        return $this->getNestedProperty($name, $default);
    }

    /**
     * @return bool
     */
    public function exists()
    {
        $key = $this->getStorageKey();

        return $key && $this->getFlexDirectory()->getStorage()->hasKey($key);
    }

    /**
     * @return array
     */
    public function jsonSerialize()
    {
        return $this->getElements();
    }

    /**
     * @return array
     */
    public function prepareStorage()
    {
        return $this->getElements();
    }

    /**
     * @return string
     */
    public function getStorageFolder()
    {
        return $this->getFlexDirectory()->getStorageFolder($this->getStorageKey());
    }

    /**
     * @return string
     */
    public function getMediaFolder()
    {
        return $this->getFlexDirectory()->getMediaFolder($this->getStorageKey());
    }

    /**
     * @param string $name
     * @return $this
     */
    public function triggerEvent($name)
    {
        return $this;
    }

    /**
     * @param string $uri
     * @return Medium|null
     */
    protected function createMedium($uri)
    {
        $grav = Grav::instance();

        /** @var UniformResourceLocator $locator */
        $locator = $grav['locator'];

        $file = $uri ? $locator->findResource($uri) : null;

        return $file ? MediumFactory::fromFile($file) : null;
    }

    /**
     * @param string $type
     * @param string $property
     * @return FlexCollection
     */
    protected function getCollectionByProperty($type, $property)
    {
        $directory = $this->getRelatedDirectory($type);
        $collection = $directory->getCollection();
        $list = $this->getNestedProperty($property) ?: [];

        $collection = $collection->filter(function ($object) use ($list) { return \in_array($object->id, $list, true); });

        return $collection;
    }

    /**
     * @param $type
     * @return FlexDirectory
     * @throws \RuntimeException
     */
    protected function getRelatedDirectory($type)
    {
        /** @var Flex $flex */
        $flex = Grav::instance()['flex_objects'];
        $directory = $flex->getDirectory($type);
        if (!$directory) {
            throw new \RuntimeException(ucfirst($type). ' directory does not exist!');
        }

        return $directory;
    }

    /**
     * @param string $layout
     * @return \Twig_Template
     * @throws \Twig_Error_Loader
     * @throws \Twig_Error_Syntax
     */
    protected function getTemplate($layout)
    {
        $grav = Grav::instance();

        /** @var Twig $twig */
        $twig = $grav['twig'];

        try {
            return $twig->twig()->resolveTemplate(["flex-objects/layouts/{$this->getType(false)}/object/{$layout}.html.twig"]);
        } catch (\Twig_Error_Loader $e) {
            /** @var Debugger $debugger */
            $debugger = Grav::instance()['debugger'];
            $debugger->addException($e);

            return $twig->twig()->resolveTemplate(["flex-objects/layouts/404.html.twig"]);
        }
    }

    /**
     * Create new object into storage.
     *
     * @param string|null $key Optional new key.
     * @return $this
     */
    protected function create($key = null)
    {
        if ($key) {
            $this->setStorageKey($key);
        }

        if ($this->exists()) {
            throw new \RuntimeException('Cannot create new object (Already exists)');
        }

        return $this->save();
    }

    /**
     * @return $this
     */
    protected function save()
    {
        $this->getFlexDirectory()->getStorage()->replaceRows([$this->getStorageKey() => $this->prepareStorage()]);

        try {
            $this->getFlexDirectory()->clearCache();
            if (method_exists($this, 'clearMediaCache')) {
                $this->clearMediaCache();
            }
        } catch (InvalidArgumentException $e) {
            /** @var Debugger $debugger */
            $debugger = Grav::instance()['debugger'];
            $debugger->addException($e);

            // Caching failed, but we can ignore that for now.
        }

        return $this;
    }

    /**
     * @return $this
     */
    protected function delete()
    {
        $this->getFlexDirectory()->getStorage()->deleteRows([$this->getStorageKey() => $this->prepareStorage()]);

        try {
            $this->getFlexDirectory()->clearCache();
            if (method_exists($this, 'clearMediaCache')) {
                $this->clearMediaCache();
            }
        } catch (InvalidArgumentException $e) {
            /** @var Debugger $debugger */
            $debugger = Grav::instance()['debugger'];
            $debugger->addException($e);

            // Caching failed, but we can ignore that for now.
        }

        return $this;
    }

    /**
     * @param array $elements
     */
    protected function filterElements(array &$elements)
    {
        if (!empty($elements['storage_key'])) {
            $this->storageKey = trim($elements['storage_key']);
        }
        if (!empty($elements['storage_timestamp'])) {
            $this->timestamp = (int)$elements['storage_timestamp'];
        }

        unset ($elements['storage_key'], $elements['storage_timestamp']);
    }
}
