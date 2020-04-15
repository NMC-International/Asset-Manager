<?php
namespace AssetManager\Interfaces;

interface iAsset{
    public function add(mixed $cssFile, array $attr_array = null):void;
    public function remove(string $index):void;
    public function combine(bool $bool):void;
    public function minify(bool $bool):void;
    public function obfuscate(bool $bool):void;
    public function excecuteAll():string;
    public function e():void;
    public function _():void;
    public function add_attribute($array);
    public function toStrong():string;
}