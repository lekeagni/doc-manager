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
public function __construct($id=null,$name=null, $email=null, $password=null,$role_id=1){
    if(!empty($id)){
        $this->id=$id;
    }
    if(!empty($name)){
        $this->name=$name;
    }
    if(!empty($email)){
        $this->email=$email;
    }
    if(!empty($password)){
        $this->password=$password;
    }
    if(!empty($role_id)){
        $this->$role_id=$role_id;
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
