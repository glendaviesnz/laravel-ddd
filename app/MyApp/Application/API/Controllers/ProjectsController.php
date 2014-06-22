<?php
namespace MyApp\Application\API\Controllers;
use Doctrine\ORM\EntityManager;

class ProjectsController extends \Controller {
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
        
    }

    public function showWelcome()
    {
        return View::make('hello');

    }

    public function index()
    {
        
        $project = new \MyApp\Domain\Entities\Project();
        $project->setName('VLN');
        $this->entity_manager->persist($project);
        $this->entity_manager->flush();
        echo 'test';
        exit;

    }

}
