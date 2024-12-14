<?php

// autoload_real.php @generated by Composer

class ComposerAutoloaderInitc62f5241ab3f39b8d5bb01595586923f
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

        spl_autoload_register(array('ComposerAutoloaderInitc62f5241ab3f39b8d5bb01595586923f', 'loadClassLoader'), true, true);
        self::$loader = $loader = new \Composer\Autoload\ClassLoader(\dirname(__DIR__));
        spl_autoload_unregister(array('ComposerAutoloaderInitc62f5241ab3f39b8d5bb01595586923f', 'loadClassLoader'));

        require __DIR__ . '/autoload_static.php';
        call_user_func(\Composer\Autoload\ComposerStaticInitc62f5241ab3f39b8d5bb01595586923f::getInitializer($loader));

        $loader->register(true);

        return $loader;
    }
}