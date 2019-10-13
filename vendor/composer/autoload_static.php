<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit1ab1398ce18667d1b4bdef26dcdfa7f2
{
    public static $files = array (
        'd6197def33cfa0dd7f4d830147b59103' => __DIR__ . '/../..' . '/src/Soft.php',
        'ac0806772ca1d3d27bf4e80f155a72a7' => __DIR__ . '/../..' . '/src/Strict.php',
        'a1f455741d5379b6800c34b0ccce53dd' => __DIR__ . '/../..' . '/src/NotTyped.php',
    );

    public static $prefixesPsr0 = array (
        'C' => 
        array (
            'Colors' => 
            array (
                0 => __DIR__ . '/..' . '/kevinlebrun/colors.php/src',
            ),
        ),
    );

    public static $classMap = array (
        'Colors\\Color' => __DIR__ . '/..' . '/kevinlebrun/colors.php/src/Colors/Color.php',
        'Colors\\Exception' => __DIR__ . '/..' . '/kevinlebrun/colors.php/src/Colors/Exception.php',
        'Colors\\InvalidStyleNameException' => __DIR__ . '/..' . '/kevinlebrun/colors.php/src/Colors/InvalidStyleNameException.php',
        'Colors\\NoStyleFoundException' => __DIR__ . '/..' . '/kevinlebrun/colors.php/src/Colors/NoStyleFoundException.php',
        'Colors\\RecursionInUserStylesException' => __DIR__ . '/..' . '/kevinlebrun/colors.php/src/Colors/RecursionInUserStylesException.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixesPsr0 = ComposerStaticInit1ab1398ce18667d1b4bdef26dcdfa7f2::$prefixesPsr0;
            $loader->classMap = ComposerStaticInit1ab1398ce18667d1b4bdef26dcdfa7f2::$classMap;

        }, null, ClassLoader::class);
    }
}
