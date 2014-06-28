<?php
namespace MyApp\Application\API\Controllers;

use Doctrine\ORM\EntityManager;

class ProjectsController extends \Controller {


    public function __construct(EntityManager $entity_manager)
    {
        $this->entity_manager = $entity_manager;
        
    }

    public function index()
    {
        
        //just some example of using Doctrine entity manager
        
        //create a new project 
        $project = new \MyApp\Domain\Entity\Project();
        $project->setName('Megashop website build');
        
        //persist the new project
        $this->entity_manager->persist($project);
        $this->entity_manager->flush();
        
        //get all the projects 
        $projectRepository = $this->entity_manager->getRepository('MyApp\Domain\Entity\Project');
        $projects = $projectRepository->findAll();
        $hours_worked = array();
        
        foreach ($projects as $project) {
            //because Project is an Entity Object encapsulating state and behaviour
            //it is easy/obvious to add/call methods on the object, such as the one 
            //below to calculate the total hours worked by full project team
            $hours_worked[$project->getName()] =  $project->calculateTotalHoursWorked();
        }
        return \Response::json(json_encode($hours_worked));

    }

}
