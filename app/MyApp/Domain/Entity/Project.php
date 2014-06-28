<?php
namespace MyApp\Domain\Entity;

/**
 * Project entity
 *
 * @author glen
 */
class Project {
    
    /* 
    *  Unique id of project
    *
    * @var int 
    */
    protected $id;
    
    /* 
    *  Name of project
    *
    * @var string 
    */
    protected $name;
    
    /* 
    *  Description of project
    *
    * @var string 
    */
    protected $description;
    
    /* 
    *  Collection of project team members
    *
    * @var string 
    */
    protected $project_team;
    
    public function __construct()
    {
        $this->project_team = new \Doctrine\Common\Collections\ArrayCollection();
    }
    
    /*
     *  Get Project name
     *  @return string
     */
    public function getName() {
        return $this->name;
    }
    
    /*
     * Set the project name
     * @param  string  $name
     * @return void
     */
    public function setName($name) {
        $this->name = $name;
    }
    
    /*
     *  Get Project description
     *  @return string
     */
    public function getDescription() {
        return $this->description;
    }
    
    /*
     * Set the project description
     * @param  string  $description
     * @return void
     */
    public function setDescription($description) {
       $this->description = $description;
    }
    
     /*
     *  Get Project team
     *  @return string
     */
    public function getProjectTeam() {
        return $this->project_team;
    }
    
     /*
     *  Return total number of hours worked by team
     *  @return int
     */
    public function calculateTotalHoursWorked() {
        
        $hours_worked = 0;
        foreach ($this->project_team as $team_member) {
            $hours_worked += $team_member->calculateHoursWorked();
        }
        return $hours_worked;
    }
    
    
}
