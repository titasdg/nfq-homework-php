<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit1ab1398ce18667d1b4bdef26dcdfa7f2
{
    public static $prefixesPsr0 = array (
        'C' => 
        array (
            'Colors' => 
            array (
                0 => __DIR__ . '/..' . '/kevinlebrun/colors.php/src',
            ),
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixesPsr0 = ComposerStaticInit1ab1398ce18667d1b4bdef26dcdfa7f2::$prefixesPsr0;

        }, null, ClassLoader::class);
    }
}