<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitd4b8d7049953f25e9b5a9eb23c274216
{
    public static $prefixLengthsPsr4 = array (
        't' => 
        array (
            'tes\\' => 4,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'tes\\' => 
        array (
            0 => __DIR__ . '/../..' . '/src',
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInitd4b8d7049953f25e9b5a9eb23c274216::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitd4b8d7049953f25e9b5a9eb23c274216::$prefixDirsPsr4;

        }, null, ClassLoader::class);
    }
}
