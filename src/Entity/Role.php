<?php

namespace App\Entity;

class Role
{
    public $id;
    public $role_name;
    public $description;

    // public function __construct(array $data){
    //     if(isset($data['id'])){
    //       $this->id=$data['id'];
    //     }
    //     if(isset($data['role_name'])){
    //       $this->role_name=$data['role_name'];
    //     }
    //     if(isset($data['description'])){
    //       $this->description=$data['description'];
    //     }

    // }
    
    public function getId()
    {
        return $this->id;
    }
    public function getRoleName()
    {
        return $this->role_name;
    }
    public function getDescription()
    {
        return $this->description;
    }
    public function setId($id)
    {
        $this->id = $id;
    }
    public function setRoleName($role_name)
    {
        $this->role_name = $role_name;
    }
    public function setDescription($description)
    {
        $this->description = $description;
    }
}
