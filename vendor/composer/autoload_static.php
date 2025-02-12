<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit284bac05490e36a0f69724b8d2726efc
{
    public static $prefixLengthsPsr4 = array (
        'e' => 
        array (
            'eftec\\bladeone\\' => 15,
        ),
        'P' => 
        array (
            'Phroute\\Phroute\\' => 16,
        ),
        'A' => 
        array (
            'Asus\\Asm2Php2\\' => 14,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'eftec\\bladeone\\' => 
        array (
            0 => __DIR__ . '/..' . '/eftec/bladeone/lib',
        ),
        'Phroute\\Phroute\\' => 
        array (
            0 => __DIR__ . '/..' . '/phroute/phroute/src/Phroute',
        ),
        'Asus\\Asm2Php2\\' => 
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
            $loader->prefixLengthsPsr4 = ComposerStaticInit284bac05490e36a0f69724b8d2726efc::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit284bac05490e36a0f69724b8d2726efc::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit284bac05490e36a0f69724b8d2726efc::$classMap;

        }, null, ClassLoader::class);
    }
}
