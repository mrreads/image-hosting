<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit7a63ef3561c5b9bd4e9a15c41c15a664
{
    public static $prefixLengthsPsr4 = array (
        'A' => 
        array (
            'Application\\Core\\' => 17,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Application\\Core\\' => 
        array (
            0 => __DIR__ . '/../..' . '/application/core',
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit7a63ef3561c5b9bd4e9a15c41c15a664::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit7a63ef3561c5b9bd4e9a15c41c15a664::$prefixDirsPsr4;

        }, null, ClassLoader::class);
    }
}