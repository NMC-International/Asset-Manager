<?php
/**
 * Created by PhpStorm.
 * User: engrr
 * Date: 4/16/2020
 * Time: 12:48 AM
 */

namespace NMCINT\AssetManager;


use Illuminate\Support\ServiceProvider;

class AssetServiceProvider extends ServiceProvider
{
    public function boot()
    {

        //Publish the config into app config directory
        $this->publishes([
            __DIR__ . '/config/assets.php' => config_path('assets.php')
        ]);
        echo "I am booted";
    }

    public function register()
    {
        $this->mergeConfigFrom(
            __DIR__.'/config/assets.php', 'assets'
        );
        echo "I am registered";
    }
}