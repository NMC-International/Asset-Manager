<?php
/**
 * Created by PhpStorm.
 * User: engrr
 * Date: 4/16/2020
 * Time: 12:48 AM
 */

namespace AssetManager;


class AssetServiceProvider extends  \Illuminate\Support\ServiceProvider
{
    public function boot()
    {

        //Publish the config into app config directory
        $this->publishes([
            __DIR__ . '/config/assets.php' => config_path('assets.php')
        ]);
    }

    public function register()
    {
        // Needed for Laravel < 5.3 compatibility
    }
}