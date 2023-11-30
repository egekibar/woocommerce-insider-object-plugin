<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit8643c9736e8b6e7db08056a80c53d33a
{
    public static $prefixLengthsPsr4 = array (
        'I' => 
        array (
            'Insider\\' => 8,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Insider\\' => 
        array (
            0 => __DIR__ . '/../..' . '/insider',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit8643c9736e8b6e7db08056a80c53d33a::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit8643c9736e8b6e7db08056a80c53d33a::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit8643c9736e8b6e7db08056a80c53d33a::$classMap;

        }, null, ClassLoader::class);
    }
}