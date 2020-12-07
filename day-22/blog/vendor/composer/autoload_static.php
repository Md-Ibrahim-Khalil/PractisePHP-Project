<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit415ee4dc5e46a5eff93c8716f10fe155
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
            0 => __DIR__ . '/../..' . '/app',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit415ee4dc5e46a5eff93c8716f10fe155::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit415ee4dc5e46a5eff93c8716f10fe155::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit415ee4dc5e46a5eff93c8716f10fe155::$classMap;

        }, null, ClassLoader::class);
    }
}
