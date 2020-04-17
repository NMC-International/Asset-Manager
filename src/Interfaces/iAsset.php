<?php
namespace AssetManager\Interfaces;

interface iAsset{
    public function add(string $cssFile, array $attr_array = null):void;
    public function remove(string $index):void;
    public function combine(bool $bool):void;
    public function minify(bool $bool):void;
    public function obfuscate(bool $bool):void;
    public function e():void;
    public function _():string;
    public function add_attribute($array);
    public function toStrong():string;
}