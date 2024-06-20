<?php

namespace App\Entity;

class User
{
    public $id;
    public $name;
    public $email;
    public $password;
    public $grade;
    public $created;
    public $created_by;
    public $modified_by;
    public $modified_date;
    public $deleted;
    public $role_id;
    public $statuts;

    public function __construct(array $data){
        if(isset($data['id'])){
            $this->id=$data['id'];
        }
        if(isset($data['name'])){
            $this->name=$data['name'];
        }
        if(isset($data['email'])){
            $this->email=$data['email'];
        }
        if(isset($data['password'])){
            $this->password=$data['password'];
        }
        if(isset($data['grade'])){
            $this->grade=$data['grade'];
        }
        if(isset($data['created'])){
            $this->created=$data['created'];
        }
        if(isset($data['created_by'])){
            $this->created_by=$data['created_by'];
        }
        if(isset($data['modified_by'])){
            $this->modified_by=$data['modified_by'];
        }
        if(isset($data['modified_date'])){
            $this->modified_date=$data['modified_date'];
        }
        if(isset($data['deleted'])){
            $this->deleted=$data['deleted'];
        }
        if(isset($data['role_id'])){
            $this->role_id=$data['role_id'];
        }
        if(isset($data['statuts'])){
            $this->statuts=$data['statuts'];
        }
        
    }

    public function getId()
    {
        return $this->id;
    }
    public function getName()
    {
        return $this->name;
    }
    public function getEmail()
    {
        return $this->email;
    }
    public function getPassword()
    {
        return $this->password;
    }
    public function getGrade()
    {
        return $this->grade;
    }
    public function getCreated()
    {
        return $this->created;
    }
    public function getCreatedBy()
    {
        return $this->created_by;
    }
    public function getModifiedBy()
    {
        return $this->modified_by;
    }
    public function getModifiedDate()
    {
        return $this->modified_date;
    }
    public function getDeleted()
    {
        return $this->deleted;
    }
    public function getRoleId()
    {
        return $this->role_id;
    }
    public function getStatuts()
    {
        return $this->statuts;
    }
    public function setId($id)
    {
        $this->id = $id;
    }
    public function setName($name)
    {
        $this->name = $name;
    }
    public function setEmail($email)
    {
        $this->email = $email;
    }
    public function setPassword($password)
    {
        $this->password = $password;
    }
    public function setGrade($grade)
    {
        $this->grade = $grade;
    }
    public function setCreated($created)
    {
        $this->created = $created;
    }
    public function setCreatedBy($created_by)
    {
        $this->created_by = $created_by;
    }
    public function setModifiedBy($modified_by)
    {
        $this->modified_by = $modified_by;
    }
    public function setModifiedDate($modified_date)
    {
        $this->modified_date = $modified_date;
    }
    public function setDeleted($deleted)
    {
        $this->deleted = $deleted;
    }
    public function setRoleId($role_id)
    {
        $this->role_id = $role_id;
    }
    public function setStatuts($statuts)
    {
        $this->statuts = $statuts;
    }
}
