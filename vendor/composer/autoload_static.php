<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit0253f06738d82e4e2718b47507c1be13
{
    public static $prefixLengthsPsr4 = array (
        'A' => 
        array (
            'App\\' => 4,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'App\\' => 
        array (
            0 => __DIR__ . '/../..' . '/app',
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit0253f06738d82e4e2718b47507c1be13::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit0253f06738d82e4e2718b47507c1be13::$prefixDirsPsr4;

        }, null, ClassLoader::class);
    }
}
