<?php

// autoload_real.php @generated by Composer

class ComposerAutoloaderInitde0d1591c50e293d89af1a11d8e2eaa2
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

        require __DIR__ . '/platform_check.php';

        spl_autoload_register(array('ComposerAutoloaderInitde0d1591c50e293d89af1a11d8e2eaa2', 'loadClassLoader'), true, true);
        self::$loader = $loader = new \Composer\Autoload\ClassLoader(\dirname(__DIR__));
        spl_autoload_unregister(array('ComposerAutoloaderInitde0d1591c50e293d89af1a11d8e2eaa2', 'loadClassLoader'));

        require __DIR__ . '/autoload_static.php';
        call_user_func(\Composer\Autoload\ComposerStaticInitde0d1591c50e293d89af1a11d8e2eaa2::getInitializer($loader));

        $loader->register(true);

        return $loader;
    }
}
