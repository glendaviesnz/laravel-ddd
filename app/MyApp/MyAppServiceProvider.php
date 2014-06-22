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

            $paths = array(__DIR__.'/Infrastructure/Repository/Metadata');
            $config = Setup::createXMLMetadataConfiguration($paths, $isDevMode);
            $conn = array(
                'driver' => 'pdo_mysql',
                'host' => 'localhost',
                'dbname' => 'laravelddd',
                'user' => 'root',
                'password' => 'root',
                
            );

            return \Doctrine\ORM\EntityManager::create($conn, $config);
        });

    }

}
