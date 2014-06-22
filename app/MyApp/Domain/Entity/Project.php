<?php
namespace MyApp\Domain\Entity;
/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Project
 *
 * @author glen
 */
class Project {
    
    protected $name;
    protected $id;
    protected $description;
    
    public function getName() {
        return $this->name;
    }
    public function setName($name) {
        return $this->name = $name;
    }
    public function getDescription() {
        return $this->description;
    }
}
