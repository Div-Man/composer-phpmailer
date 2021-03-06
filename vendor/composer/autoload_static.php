<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit8393bf7f4a7e10a59f9c7a4d7deab1af
{
    public static $prefixLengthsPsr4 = array (
        'P' => 
        array (
            'PHPMailer\\PHPMailer\\' => 20,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'PHPMailer\\PHPMailer\\' => 
        array (
            0 => __DIR__ . '/..' . '/phpmailer/phpmailer/src',
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit8393bf7f4a7e10a59f9c7a4d7deab1af::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit8393bf7f4a7e10a59f9c7a4d7deab1af::$prefixDirsPsr4;

        }, null, ClassLoader::class);
    }
}
