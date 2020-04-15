<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Asset Domain
    |--------------------------------------------------------------------------
    |
    | If assets and hosted into static domain, sub domain or CDN, Then mention
    | Domain here. Don't put trailing '/'
    */

    'domain' => env('ASSET_DOMAIN', '/'),

    /*
    |--------------------------------------------------------------------------
    | Asset Path
    |--------------------------------------------------------------------------
    |
    | This value define the root file where raw asset will be resides
    | Path mush ends with a trailing '/'
    |
    */

    'root_path' => env('ASSET_PATH', 'resource/'),

    /*
    |--------------------------------------------------------------------------
    | Asset Url
    |--------------------------------------------------------------------------
    |
    | This path will be the public url for any asset path
    Path must ends with a trainling '/'
    |
    */

    'url' => env('ASSET_URL', 'assets/'),

    /*
    |--------------------------------------------------------------------------
    | Combine CSS, JS, PAGE TEMPLATE
    |--------------------------------------------------------------------------
    |
    | Make sure combine the CSS, JS and Blade template into single file at output
    |
    */

    'combine_css' => env('ASSET_COMBINE_CSS', false),
    'combine_head_js' => env('ASSET_COMBINE_head_JS', false),
    'combine_tail_js' => env('ASSET_COMBINE_tail_JS', false),
    'combine_blade' => env('ASSET_COMBINE_blade', false),

    /*
    |--------------------------------------------------------------------------
    | Minify
    |--------------------------------------------------------------------------
    |
    | Set flag to make sure file get minified or not.
    |
    */

    'minify_css' => env('ASSET_Minify_CSS', false),
    'minify_head_js' => env('ASSET_Minify_head_JS', false),
    'minify_tail_js' => env('ASSET_Minify_tail_JS', false),
    'minify_blade' => env('ASSET_COMBINE_blade', false),


    /*
     * Language specific suffics
     *
     */
    'multi_lang' => env('ASSET_MULTI_LANG',false),
    'fallback_lang' => env('ASSET_FALLBACK_LANG','en'),

    /*
     * There are 2 mode for asset env
     * 0 - dev - development, where asset will not be cached and all assets url will have random number as suffix
     * 1 - pro - production, all asset will be cache and there will be not suffice except version number if set
     */
    'env' => env('ASSET_ENV','dev'),


    /*
     * Asset Version
     * Force the browser to use difference version
     */
    'version' => env('ASSET_VERSION', '1.0.0')


];
