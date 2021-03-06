<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitf5943832bfff5ef9724aab30c11ef5b6
{
    public static $prefixLengthsPsr4 = array (
        'v' => 
        array (
            'vinlog\\' => 7,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'vinlog\\' => 
        array (
            0 => __DIR__ . '/../..' . '/src/vinlog',
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInitf5943832bfff5ef9724aab30c11ef5b6::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitf5943832bfff5ef9724aab30c11ef5b6::$prefixDirsPsr4;

        }, null, ClassLoader::class);
    }
}
