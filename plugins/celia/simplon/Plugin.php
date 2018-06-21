<?php namespace Celia\Simplon;

use Backend;
use System\Classes\PluginBase;

/**
 * Simplon Plugin Information File
 */
class Plugin extends PluginBase
{
    /**
     * Returns information about this plugin.
     *
     * @return array
     */
    public function pluginDetails()
    {
        return [
            'name'        => 'Simplon',
            'description' => 'No description provided yet...',
            'author'      => 'Celia',
            'icon'        => 'icon-leaf'
        ];
    }

    /**
     * Register method, called when the plugin is first registered.
     *
     * @return void
     */
    public function register()
    {

    }

    /**
     * Boot method, called right before the request route.
     *
     * @return array
     */
    public function boot()
    {

    }

    /**
     * Registers any front-end components implemented in this plugin.
     *
     * @return array
     */
    public function registerComponents()
    {
        return []; // Remove this line to activate

        return [
            'Celia\Simplon\Components\MyComponent' => 'myComponent',
        ];
    }

    /**
     * Registers any back-end permissions used by this plugin.
     *
     * @return array
     */
    public function registerPermissions()
    {
        return []; // Remove this line to activate

        return [
            'celia.simplon.some_permission' => [
                'tab' => 'Simplon',
                'label' => 'Some permission'
            ],
        ];
    }

    /**
     * Registers back-end navigation items for this plugin.
     *
     * @return array
     */
    public function registerNavigation()
    {
        //return []; // Remove this line to activate

        return [
            'simplon' => [
                'label'       => 'Simplon',
                'url'         => Backend::url('celia/simplon/mycontroller'),
                'icon'        => 'icon-leaf',
                'permissions' => ['celia.simplon.*'],
                'order'       => 500,
            ],
        ];
    }
}
