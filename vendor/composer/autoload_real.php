<?php

// autoload_real.php @generated by Composer

class ComposerAutoloaderInit277d0fc76e1e6fa7af116f9a0ee06e1f
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

        spl_autoload_register(array('ComposerAutoloaderInit277d0fc76e1e6fa7af116f9a0ee06e1f', 'loadClassLoader'), true, true);
        self::$loader = $loader = new \Composer\Autoload\ClassLoader(\dirname(__DIR__));
        spl_autoload_unregister(array('ComposerAutoloaderInit277d0fc76e1e6fa7af116f9a0ee06e1f', 'loadClassLoader'));

        require __DIR__ . '/autoload_static.php';
        \Composer\Autoload\ComposerStaticInit277d0fc76e1e6fa7af116f9a0ee06e1f::getInitializer($loader)();

        $loader->register(true);

        $includeFiles = \Composer\Autoload\ComposerStaticInit277d0fc76e1e6fa7af116f9a0ee06e1f::$files;
        foreach ($includeFiles as $fileIdentifier => $file) {
            composerRequire277d0fc76e1e6fa7af116f9a0ee06e1f($fileIdentifier, $file);
        }

        return $loader;
    }
}

/**
 * @param string $fileIdentifier
 * @param string $file
 * @return void
 */
function composerRequire277d0fc76e1e6fa7af116f9a0ee06e1f($fileIdentifier, $file)
{
    if (empty($GLOBALS['__composer_autoload_files'][$fileIdentifier])) {
        $GLOBALS['__composer_autoload_files'][$fileIdentifier] = true;

        require $file;
    }
}