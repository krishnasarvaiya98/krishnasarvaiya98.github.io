<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitacdacd1c98840de4b7cd81d1e5e29922
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
            $loader->prefixLengthsPsr4 = ComposerStaticInitacdacd1c98840de4b7cd81d1e5e29922::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitacdacd1c98840de4b7cd81d1e5e29922::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInitacdacd1c98840de4b7cd81d1e5e29922::$classMap;

        }, null, ClassLoader::class);
    }
}