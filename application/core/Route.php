<?php

namespace Application\Core;

class Route
{
    public static $url;
    public static $requestmethod;
    public static $config;

    public static $home;
    public static $error;

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

            if (self::$url)
            {
                if ($link[0] == self::$url[0])
                {
                    self::view($file, $ext);
                }
                else
                {
                    //self::view(self::$error, $ext);
                }
            }
            else
            {
                self::view(self::$home, $ext);
            }
        }
    }

    public static function view($path, $ext)
    {
        $fileToLoad = dirname(__DIR__) . '/views/' . $path . '.' . $ext;
        require_once($fileToLoad);
    }

    
    public static function home($path, $ext = 'php')
    {
        self::$home = $path;
    }
    public static function error($path, $ext = 'php')
    {
        self::$error = $path;
    }

    public static function getURL()
    {
        return self::$url[0];
    }
}