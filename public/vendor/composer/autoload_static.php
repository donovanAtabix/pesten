<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitee7cf209a7369d278de4ac3a8a29a0fa
{
    public static $prefixLengthsPsr4 = array (
        'P' => 
        array (
            'Pesten\\' => 7,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Pesten\\' => 
        array (
            0 => __DIR__ . '/../..' . '/app/Pesten',
        ),
    );

    public static $classMap = array (
        'Pesten\\src\\Deck' => __DIR__ . '/../..' . '/app/Pesten/src/Deck.php',
        'Pesten\\src\\Game' => __DIR__ . '/../..' . '/app/Pesten/src/Game.php',
        'Pesten\\src\\Player' => __DIR__ . '/../..' . '/app/Pesten/src/Player.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInitee7cf209a7369d278de4ac3a8a29a0fa::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitee7cf209a7369d278de4ac3a8a29a0fa::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInitee7cf209a7369d278de4ac3a8a29a0fa::$classMap;

        }, null, ClassLoader::class);
    }
}