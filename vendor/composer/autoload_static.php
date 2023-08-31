<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitfeaef55c7f89f6d5eb7f8842a0ac2d20
{
    public static $prefixLengthsPsr4 = array (
        'D' => 
        array (
            'Digi\\Paginaire\\' => 10,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Digi\\Paginaire\\' => 
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
            $loader->prefixLengthsPsr4 = ComposerStaticInitfeaef55c7f89f6d5eb7f8842a0ac2d20::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitfeaef55c7f89f6d5eb7f8842a0ac2d20::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInitfeaef55c7f89f6d5eb7f8842a0ac2d20::$classMap;

        }, null, ClassLoader::class);
    }
}
