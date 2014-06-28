<?php
namespace MyApp\Domain\Entity;

/**
 * Project team member
 *
 * @author glen
 */
class TeamMember {
    
    /* 
    *  Unique id of team member
    *
    * @var int 
    */
    protected $id;
    
    /* 
    *  First Name of team member
    *
    * @var string 
    */
    protected $first_name;
    
    /* 
    *  Last name of team member
    *
    * @var string 
    */
    protected $last_name;
    
    /*
     *  Get Project name
     *  @return string
     */
    public function getFullName() {
        return $this->first_name.' '.$this->last_name;
    }
    
    /*
     * Set the team member first name
     * @param  string  $first_name
     * @return void
     */
    public function setFirstName($first_name) {
        $this->first_name = $first_name;
    }
    
    /*
     * Set the team member last name
     * @param  string  $last_name
     * @return void
     */
    public function setLastName($last_name) {
        $this->last_name = $last_name;
    }  
    
     /*
     *  Return total number of hours on project
     *  @return int
     */
    public function calculateHoursWorked() {
            
        //add method detail to calculate the hours worked
        $hours_worked = rand(5,50);
        return $hours_worked;
    }
}
