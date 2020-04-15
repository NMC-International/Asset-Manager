<?php

namespace AssetManager\Asset;

class Assets
{
    public function __construct()
    {

    }

    public function test(){
        echo config('assets.root_path');
    }
}