<?php

namespace MyApp;

use Illuminate\Support\ServiceProvider;
use Doctrine\ORM\Tools\Setup;


class MyAppServiceProvider extends ServiceProvider {

    public function boot()
    {
        
    }

    /**
     * Register the binding
     *
     * @return void
     */
    public function register()
    {

        \App::singleton('Doctrine\ORM\EntityManager', function() {
            $isDevMode = true;
            $config = Setup::createAnnotationMetadataConfiguration(array(__DIR__ . "/src"), $isDevMode);

            $conn = array(
                'driver' => 'pdo_sqlite',
                'path' => __DIR__ . '/db.sqlite',
            );

            return \Doctrine\ORM\EntityManager::create($conn, $config);
        });

    }

}
