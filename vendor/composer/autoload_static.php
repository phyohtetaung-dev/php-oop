<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit31e37e0c283c127c73d203c4c6dba65c
{
    public static $prefixLengthsPsr4 = array (
        'B' => 
        array (
            'Bcme\\' => 5,
        ),
        'A' => 
        array (
            'Acme\\' => 5,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Bcme\\' => 
        array (
            0 => __DIR__ . '/../..' . '/scope-and-context',
        ),
        'Acme\\' => 
        array (
            0 => __DIR__ . '/../..' . '/namespace-and-messages',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit31e37e0c283c127c73d203c4c6dba65c::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit31e37e0c283c127c73d203c4c6dba65c::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit31e37e0c283c127c73d203c4c6dba65c::$classMap;

        }, null, ClassLoader::class);
    }
}
