<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit78558feea1439656819d6a5f2f094510
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
            0 => __DIR__ . '/../..' . '/App',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit78558feea1439656819d6a5f2f094510::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit78558feea1439656819d6a5f2f094510::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit78558feea1439656819d6a5f2f094510::$classMap;

        }, null, ClassLoader::class);
    }
}
