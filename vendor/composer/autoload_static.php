<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitf93698b66c2fcf77798cf82f4cdb6598
{
    public static $prefixLengthsPsr4 = array (
        'E' => 
        array (
            'EtherpadLite\\' => 13,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'EtherpadLite\\' => 
        array (
            0 => __DIR__ . '/..' . '/tomnomnom/etherpad-lite-client/EtherpadLite',
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInitf93698b66c2fcf77798cf82f4cdb6598::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitf93698b66c2fcf77798cf82f4cdb6598::$prefixDirsPsr4;

        }, null, ClassLoader::class);
    }
}
