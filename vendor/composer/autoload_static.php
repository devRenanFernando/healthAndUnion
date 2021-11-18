<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit73bbd14f25e29cc47f779be2d140fd9c
{
    public static $prefixLengthsPsr4 = array (
        'W' => 
        array (
            'Whoops\\' => 7,
        ),
        'P' => 
        array (
            'Psr\\Log\\' => 8,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Whoops\\' => 
        array (
            0 => __DIR__ . '/..' . '/filp/whoops/src/Whoops',
        ),
        'Psr\\Log\\' => 
        array (
            0 => __DIR__ . '/..' . '/psr/log/src',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit73bbd14f25e29cc47f779be2d140fd9c::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit73bbd14f25e29cc47f779be2d140fd9c::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit73bbd14f25e29cc47f779be2d140fd9c::$classMap;

        }, null, ClassLoader::class);
    }
}
