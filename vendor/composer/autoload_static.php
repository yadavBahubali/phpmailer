<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit58cd53632a44f74a8e556da0946dfdcf
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

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit58cd53632a44f74a8e556da0946dfdcf::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit58cd53632a44f74a8e556da0946dfdcf::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit58cd53632a44f74a8e556da0946dfdcf::$classMap;

        }, null, ClassLoader::class);
    }
}
