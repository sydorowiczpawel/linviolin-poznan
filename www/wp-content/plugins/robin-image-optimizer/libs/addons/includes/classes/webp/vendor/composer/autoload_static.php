<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit84320a6a225dd65e40820c51b32fdca4
{
    public static $prefixLengthsPsr4 = array (
        'D' => 
        array (
            'DOMUtilForWebP\\' => 15,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'DOMUtilForWebP\\' => 
        array (
            0 => __DIR__ . '/..' . '/rosell-dk/dom-util-for-webp/src',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit84320a6a225dd65e40820c51b32fdca4::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit84320a6a225dd65e40820c51b32fdca4::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit84320a6a225dd65e40820c51b32fdca4::$classMap;

        }, null, ClassLoader::class);
    }
}
