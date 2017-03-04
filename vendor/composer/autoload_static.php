<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit033b00148a03cf13b62a63c9fbf4e519
{
    public static $classMap = array (
        'App' => __DIR__ . '/../..' . '/core/App.php',
        'ComposerAutoloaderInit033b00148a03cf13b62a63c9fbf4e519' => __DIR__ . '/..' . '/composer/autoload_real.php',
        'Composer\\Autoload\\ClassLoader' => __DIR__ . '/..' . '/composer/ClassLoader.php',
        'Composer\\Autoload\\ComposerStaticInit033b00148a03cf13b62a63c9fbf4e519' => __DIR__ . '/..' . '/composer/autoload_static.php',
        'Connection' => __DIR__ . '/../..' . '/database/Connection.php',
        'Event' => __DIR__ . '/../..' . '/assets/global/plugins/fullcalendar/demos/php/utils.php',
        'QueryBuilder' => __DIR__ . '/../..' . '/database/QueryBuilder.php',
        'SSP' => __DIR__ . '/../..' . '/assets/global/plugins/datatables/examples/server_side/scripts/ssp.class.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->classMap = ComposerStaticInit033b00148a03cf13b62a63c9fbf4e519::$classMap;

        }, null, ClassLoader::class);
    }
}
