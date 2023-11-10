<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitb7e28d1f75fb9a138f7bb415f95abfe0
{
    public static $prefixLengthsPsr4 = array (
        'R' => 
        array (
            'Root\\Www\\' => 9,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Root\\Www\\' => 
        array (
            0 => __DIR__ . '/../..' . '/src',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInitb7e28d1f75fb9a138f7bb415f95abfe0::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitb7e28d1f75fb9a138f7bb415f95abfe0::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInitb7e28d1f75fb9a138f7bb415f95abfe0::$classMap;

        }, null, ClassLoader::class);
    }
}
