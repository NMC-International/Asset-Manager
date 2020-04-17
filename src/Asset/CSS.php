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
    private static $cssFiles = [];  //Home the files of css
    private static $combine = null;
    private static $minify = null;
    private static $obfuscate = null;
    private static $cssPublicPath = null;
    private static $cssRoot = null;

    //Load the default configuration on startup
    public function __construct()
    {
        self::$combine = config('assets.combine_css', false);
        self::$minify = config('assets.minify_css', false);
        self::$cssPublicPath = config('assets.public_path', '/assets') . 'css/';
        self::$cssRoot = config('assets.root_path', '/resources') . 'css/';
    }


    /**
     * This function will add css file with optional attribute into the cssFile list
     * @param mixed $cssFile
     * @param array|null $attr_array
     */
    public function add(string $cssFile, array $attr_array = null): void
    {
        if (is_string($cssFile)) {
                $tmpFileObj = ['fileName' => $cssFile];

                //Load the all attribute in css
                if ($attr_array != null && is_array($attr_array)) {
                    foreach ($attr_array as $k => $v) {
                        $tmpFileObj[$k] = $v;
                    }
                }
                self::$cssFiles[$cssFile] = $tmpFileObj;
        }
    }

    //This function will remove a cssFile from css File List
    public function remove(string $index): void
    {
        unset(self::$cssFiles[$index]);
    }

    //Override the default config
    public function combine(bool $combine): void
    {
        self::$combine = $combine;
    }


    //Override the default config
    public function minify(bool $minify): void
    {
        self::$minify = $minify;
    }

    //Override the default config
    public function obfuscate(bool $obfuscate): void
    {
        self::$obfuscate = $obfuscate;
    }


    public function e(): void
    {
        echo $this->_();
    }

    public function _(): string
    {
        var_dump(self::$cssFiles);
        $output = '';
        if (count(self::$cssFiles) > 0) {             //Check of any file exist in array
            if (self::$combine) {
                $outputFileName = '';
                foreach (self::$cssFiles as $cssFile) {   //Loop all files
                    $outputFileName .= $cssFile['fileName'];
                }
                $outputFileName = md5($outputFileName) . '.css';
                if (! file_exists(__DIR__ . self::$cssPublicPath . $outputFileName)) {
                    $tmpContent = "";
                    foreach (self::$cssFiles as $cssFile) {   //Loop all files
                        if (file_exists(self::$cssRoot . $cssFile['fileName'])) {
                            $tmpContent .= file_get_contents(self::$cssRoot . $cssFile['path']);
                        } else if (file_exists(self::$cssRoot . $cssFile['fileName'] . '.css')) {
                            $tmpContent .= file_get_contents(self::$cssRoot . $cssFile['path'] . '.css');
                        } else {
                            $tmpContent .= '/* ' . $cssFile['fileName'] . ' Not found in ' . self::$cssRoot . ' */' .  PHP_EOL;
                        }
                    }
                    file_put_contents(public_path() . self::$cssPublicPath . $outputFileName, $tmpContent);
                }
                $output = '<link rel="stylesheet" type="text/css" href="' . asset('css/' . $outputFileName) . '">' . PHP_EOL;
                return $output;
                //Return the combined output
            }else{

            }
        }
        return $output;
    }

    public function add_attribute($array):void
    {
        // TODO: Implement add_attribute() method.
    }

    //Check if file exist
    private function checkForFile($path)
    {
        return fileExists($path) ? true : false;
    }

    public function toStrong(): string
    {
        return "";
    }

    private function _obfuscate(string $plaintext): string
    {
        return $plaintext;
    }
}