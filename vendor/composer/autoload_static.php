<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit6f8ab4cc7cb55715b51bd44d86a38a02
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
            $loader->prefixLengthsPsr4 = ComposerStaticInit6f8ab4cc7cb55715b51bd44d86a38a02::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit6f8ab4cc7cb55715b51bd44d86a38a02::$prefixDirsPsr4;

        }, null, ClassLoader::class);
    }
}
