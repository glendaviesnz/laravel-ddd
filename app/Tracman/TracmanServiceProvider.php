<?php

namespace Tracman;

use Illuminate\Support\ServiceProvider;

class TracmanServiceProvider extends ServiceProvider {

    public function boot() {

        \View::addLocation(app('path') . '/Tracman/Application/Web/Views');

        \View::addNamespace('admin', app('path') . '/Tracman/Application/Web/Admin/Views');

		//add event listeners
        \Event::subscribe('\Tracman\Domain\Events\ProjectHandler');
 
    }

    /**
     * Register the binding
     *
     * @return void
     */
    public function register() {

        \App::bind(
                'Tracman\Infrastructure\Repositories\Project\ProjectInterface', 'Tracman\Infrastructure\Repositories\Project\ProjectEloquent'
        );

    }

}