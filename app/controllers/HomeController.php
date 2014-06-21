<?php
use Doctrine\ORM\EntityManager;

class HomeController extends BaseController {
    /*
      |--------------------------------------------------------------------------
      | Default Home Controller
      |--------------------------------------------------------------------------
      |
      | You may wish to use controllers instead of, or in addition to, Closure
      | based routes. That's great! Here is an example controller method to
      | get you started. To route to this controller, just add the route:
      |
      |	Route::get('/', 'HomeController@showWelcome');
      |
     */

    public function __construct(EntityManager $entity_manager)
    {
        $this->entity_manager = $entity_manager;
        dd($this->entity_manager);
    }

    public function showWelcome()
    {
        return View::make('hello');

    }

    public function test()
    {
        
        echo 'test';
        exit;

    }

}
