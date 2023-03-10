<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit3ba01e05f83f8b1d32c3f39d8af64b4a
{
    public static $prefixLengthsPsr4 = array (
        'A' => 
        array (
            'Admin\\PhpProject\\' => 17,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Admin\\PhpProject\\' => 
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
            $loader->prefixLengthsPsr4 = ComposerStaticInit3ba01e05f83f8b1d32c3f39d8af64b4a::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit3ba01e05f83f8b1d32c3f39d8af64b4a::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit3ba01e05f83f8b1d32c3f39d8af64b4a::$classMap;

        }, null, ClassLoader::class);
    }
}
