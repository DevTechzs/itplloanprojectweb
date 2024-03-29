<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit5486bb83c836be6816b364e3f99cb406
{
    public static $prefixLengthsPsr4 = array (
        'a' => 
        array (
            'app\\' => 4,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'app\\' => 
        array (
            0 => __DIR__ . '/../..' . '/app',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit5486bb83c836be6816b364e3f99cb406::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit5486bb83c836be6816b364e3f99cb406::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit5486bb83c836be6816b364e3f99cb406::$classMap;

        }, null, ClassLoader::class);
    }
}
