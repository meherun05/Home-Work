<?php

// autoload_real.php @generated by Composer

class ComposerAutoloaderInite00faf82e98d2b0e4275415194a2f4b8
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

        spl_autoload_register(array('ComposerAutoloaderInite00faf82e98d2b0e4275415194a2f4b8', 'loadClassLoader'), true, true);
        self::$loader = $loader = new \Composer\Autoload\ClassLoader(\dirname(__DIR__));
        spl_autoload_unregister(array('ComposerAutoloaderInite00faf82e98d2b0e4275415194a2f4b8', 'loadClassLoader'));

        require __DIR__ . '/autoload_static.php';
        call_user_func(\Composer\Autoload\ComposerStaticInite00faf82e98d2b0e4275415194a2f4b8::getInitializer($loader));

        $loader->register(true);

        return $loader;
    }
}
