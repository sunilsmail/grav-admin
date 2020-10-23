<?php
namespace Grav\Plugin;

use Grav\Common\Plugin;
use Grav\Plugin\FlexObjects\Controllers\AdminController;
use Grav\Plugin\FlexObjects\Flex;
use RocketTheme\Toolbox\Event\Event;

/**
 * Class FlexObjectsPlugin
 * @package Grav\Plugin
 */
class FlexObjectsPlugin extends Plugin
{
    /** @var AdminController */
    protected $controller;

    protected $version;

    protected $directory;

    /**
     * @return array
     *
     * The getSubscribedEvents() gives the core a list of events
     *     that the plugin wants to listen to. The key of each
     *     array section is the event that the plugin listens to
     *     and the value (in the form of an array) contains the
     *     callable (or function) as well as the priority. The
     *     higher the number the higher the priority.
     */
    public static function getSubscribedEvents()
    {
        return [
            'onPluginsInitialized' => [
                ['autoload', 100000],
                ['onPluginsInitialized', 0]
            ],
            'onTwigSiteVariables'  => ['onTwigSiteVariables', 0],
            'onPageInitialized'    => ['onPageInitialized', 0],
        ];
    }

    /**
     * [onPluginsInitialized:100000] Composer autoload.
     *
     * @return \Composer\Autoload\ClassLoader
     */
    public function autoload()
    {
        return require __DIR__ . '/vendor/autoload.php';
    }

    /**
     * Initialize the plugin
     */
    public function onPluginsInitialized()
    {
        if ($this->isAdmin()) {
            $this->enable([
                'onTwigTemplatePaths'                        => ['onTwigAdminTemplatePaths', 0],
                'onAdminMenu'                                => ['onAdminMenu', 0],
                'onDataTypeExcludeFromDataManagerPluginHook' => ['onDataTypeExcludeFromDataManagerPluginHook', 0],
                'onAdminControllerInit'                      => ['onAdminControllerInit', 0],
            ]);
            /** @var AdminController controller */
            $this->controller = new AdminController($this);

        } else {
            $this->enable([
                'onTwigTemplatePaths' => ['onTwigTemplatePaths', 0],
            ]);
        }

        $config = $this->config->get('plugins.flex-objects');

        // Add to DI container
        $this->grav['flex_objects'] = function () use ($config) {
            $blueprints = $config['directories'] ?: [];

            $list = [];
            foreach ($blueprints as $blueprint) {
                $list[basename($blueprint, '.yaml')] = $blueprint;
            }

            return new Flex($list, $config);
        };
    }

    public function onPageInitialized()
    {
        if ($this->isAdmin() && $this->controller->isActive()) {
            $this->controller->execute();
            $this->controller->redirect();
        }
    }

    public function onAdminControllerInit(Event $event)
    {
        $eventController = $event['controller'];
        $eventController->blacklist_views[] = $this->name;
    }

    /**
     * Add Flex Directory to admin menu
     */
    public function onAdminMenu()
    {
        $this->grav['twig']->plugins_hooked_nav['PLUGIN_FLEX_OBJECTS.TITLE'] = ['route' => $this->name, 'icon' => 'fa-list'];
    }

    /**
     * Exclude Flex Directory data from the Data Manager plugin
     */
    public function onDataTypeExcludeFromDataManagerPluginHook()
    {
        $this->grav['admin']->dataTypesExcludedFromDataManagerPlugin[] = 'directory';
    }

    /**
     * Add current directory to twig lookup paths.
     */
    public function onTwigTemplatePaths()
    {
        $extra_site_twig_path = $this->config->get('plugins.flex-objects.extra_site_twig_path');
        $extra_path = $extra_site_twig_path ? $this->grav['locator']->findResource($extra_site_twig_path) : null;
        if ($extra_path) {
            $this->grav['twig']->twig_paths[] = $extra_path;
        }

        $this->grav['twig']->twig_paths[] = __DIR__ . '/templates';
    }

    /**
     * Add plugin templates path
     */
    public function onTwigAdminTemplatePaths()
    {
        $extra_admin_twig_path = $this->config->get('plugins.flex-objects.extra_admin_twig_path');
        $extra_path = $extra_admin_twig_path ? $this->grav['locator']->findResource($extra_admin_twig_path) : null;
        if ($extra_path) {
            $this->grav['twig']->twig_paths[] = $extra_path;
        }

        $this->grav['twig']->twig_paths[] = __DIR__ . '/admin/templates';

    }

    /**
     * Set needed variables to display direcotry.
     */
    public function onTwigSiteVariables()
    {
        if ($this->isAdmin()) {
            // Twig shortcuts
            $this->grav['twig']->twig_vars['location'] = $this->controller->getLocation();
            $this->grav['twig']->twig_vars['action'] = $this->controller->getAction();
            $this->grav['twig']->twig_vars['task'] = $this->controller->getTask();
            $this->grav['twig']->twig_vars['target'] = $this->controller->getTarget();

            // CSS / JS Assets
            $this->grav['assets']->addCss('plugin://flex-objects/css/admin.css');
            $this->grav['assets']->addCss('plugin://admin/themes/grav/css/codemirror/codemirror.css');

            if ($this->controller->getLocation() === 'flex-objects' && $this->controller->getAction() === 'list') {
                $this->grav['assets']->addCss('plugin://flex-objects/css/filter.formatter.css');
                $this->grav['assets']->addCss('plugin://flex-objects/css/theme.default.css');
                $this->grav['assets']->addJs('plugin://flex-objects/js/jquery.tablesorter.min.js');
                $this->grav['assets']->addJs('plugin://flex-objects/js/widgets/widget-storage.min.js');
                $this->grav['assets']->addJs('plugin://flex-objects/js/widgets/widget-filter.min.js');
                $this->grav['assets']->addJs('plugin://flex-objects/js/widgets/widget-pager.min.js');
            }
        }

        /* else {
            if ($this->config->get('plugins.flex-objects.built_in_css')) {
                $this->grav['assets']->addCss('plugin://flex-objects/css/site.css');
            }
            $this->grav['assets']->addJs('plugin://flex-objects/js/list.min.js');
        }*/
    }
}
