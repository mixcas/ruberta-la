<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticIniteb1354cec8b5331323aa7cc629acbd57
{
    public static $prefixLengthsPsr4 = array (
        'M' => 
        array (
            'Moment\\' => 7,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Moment\\' => 
        array (
            0 => __DIR__ . '/..' . '/fightbulc/moment/src',
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticIniteb1354cec8b5331323aa7cc629acbd57::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticIniteb1354cec8b5331323aa7cc629acbd57::$prefixDirsPsr4;

        }, null, ClassLoader::class);
    }
}
