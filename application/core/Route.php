<?php

namespace Application\Core;

class Route
{
    public static $url;
    public static $requestmethod;
    public static $config;

    public function __construct()
    {
        self::$url = array_values(array_diff(explode('/', $_SERVER['REQUEST_URI']), array('')));
        self::$requestmethod = $_SERVER['REQUEST_METHOD'];

        self::init();
    }

    public static function init()
    {
        self::$config = require_once __DIR__ . './../config/routes.php';
    }

    public static function get($name, $file, $ext = 'php')
    {
        if (self::$requestmethod == 'GET')
        {
            $link = array_values(array_diff(explode('/', $name), array('')));

            echo "<pre>";
            print_r(self::$url);
            echo "</pre>";
            if ($link === self::$url)
            {
                self::view($file, $ext);
            }
            else
            {
                self::view('404', $ext);
            }
        }
    }

    public static function view($path, $ext)
    {
        $fileToLoad = dirname(__DIR__) . '/views/' . $path . '.' . $ext;
        require_once($fileToLoad);
    }
}