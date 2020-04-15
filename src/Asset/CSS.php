<?php
/**
 * Created by PhpStorm.
 * User: engrr
 * Date: 4/16/2020
 * Time: 3:44 AM
 */

namespace AssetManager\Asset;

use AssetManager\Interfaces\iAsset;

class CSS implements iAsset
{
    private $cssfiles = [];  //Home the files of css

    public function add(mixed $cssFile, array $attr_array = null):void
    {
        if( is_string($cssFile)){
            if(fileExists(config('assets.root_path' . $cssFile))){
                $tmpFileObj = [
                    "url"=>config('assets.url').$cssFile,
                    "path"=>config('assets.root_path').$cssFile,
                ];

                if( is_array($attr_array)){
                    foreach($attr_array as $k=>$v){
                        $tmpFileObj[$k] = $v;
                    }
                }
                $this->cssfiles[$cssFile] = $tmpFileObj;
            }
        }
    }

    public function remove(string $index):void
    {
        $this->cssfiles[$index]->slice();
    }

    public function combine()
    {
        // TODO: Implement combine() method.
    }

    public function minify()
    {
        // TODO: Implement minify() method.
    }

    public function obfuscate()
    {
        // TODO: Implement obfuscate() method.
    }

    public function excecuteAll()
    {
        // TODO: Implement excecuteAll() method.
    }

    public function e()
    {
        // TODO: Implement e() method.
    }

    public function _()
    {
        // TODO: Implement _() method.
    }

    public function add_attribute($array)
    {
        // TODO: Implement add_attribute() method.
    }

    //Check if file exist
    private function checkForFile($path){
        return fileExists($path) ? true : false;
    }
}