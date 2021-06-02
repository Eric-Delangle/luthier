<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit78cbeea278eab52591e50c697fa86a93
{
    public static $prefixLengthsPsr4 = array (
        'C' => 
        array (
            'Composer\\Installers\\' => 20,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Composer\\Installers\\' => 
        array (
            0 => __DIR__ . '/..' . '/composer/installers/src/Composer/Installers',
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit78cbeea278eab52591e50c697fa86a93::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit78cbeea278eab52591e50c697fa86a93::$prefixDirsPsr4;

        }, null, ClassLoader::class);
    }
}
