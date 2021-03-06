<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit66682a4381c2f4552dd0475c68741c14
{
    public static $prefixLengthsPsr4 = array (
        'u' => 
        array (
            'userApp\\' => 8,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'userApp\\' => 
        array (
            0 => __DIR__ . '/../..' . '/src',
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit66682a4381c2f4552dd0475c68741c14::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit66682a4381c2f4552dd0475c68741c14::$prefixDirsPsr4;

        }, null, ClassLoader::class);
    }
}
