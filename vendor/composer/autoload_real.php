<?php

// autoload_real.php @generated by Composer

class ComposerAutoloaderInitc253d02e0e906335ffb5859ce2579cf0
{
    private static $loader;

    public static function loadClassLoader($class)
    {
        if ('Composer\Autoload\ClassLoader' === $class) {
            require __DIR__ . '/ClassLoader.php';
        }
    }

    /**
     * @return \Composer\Autoload\ClassLoader
     */
    public static function getLoader()
    {
        if (null !== self::$loader) {
            return self::$loader;
        }

        spl_autoload_register(array('ComposerAutoloaderInitc253d02e0e906335ffb5859ce2579cf0', 'loadClassLoader'), true, true);
        self::$loader = $loader = new \Composer\Autoload\ClassLoader(\dirname(__DIR__));
        spl_autoload_unregister(array('ComposerAutoloaderInitc253d02e0e906335ffb5859ce2579cf0', 'loadClassLoader'));

        require __DIR__ . '/autoload_static.php';
        call_user_func(\Composer\Autoload\ComposerStaticInitc253d02e0e906335ffb5859ce2579cf0::getInitializer($loader));

        $loader->register(true);

        return $loader;
    }
}
