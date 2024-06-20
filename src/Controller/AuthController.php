<?php

namespace App\Controller;

require_once dirname(dirname(__DIR__)) . DIRECTORY_SEPARATOR . 'autoload.php';
use App\Service\AuthServices;
use Core\FlashMessages\Flash;

class AuthController
{
    private $service;

    public function __construct() {
        $this->service = new AuthServices();
    }

    public function signup() {
        global $rawData;
        if (isset($_POST['signup'])) {
            // print_r($_POST); die();   // recuperation des elements du formulaire apres soumission
            $name=$_POST['name'];
            $email=$_POST['email'];
            $password=$_POST['pwd'];
            $cpassword=$_POST['cpwd'];
            if((!empty($name)) || (!empty($email)) || (!empty($password)) || (!empty($cpassword))){
               if($password==$cpassword){
                $rawData=array($_POST['name'],$_POST['email'],$_POST['pwd'], 1);
                $userId = $this->service->toEntity($rawData ) ;
                // echo '<script> alert("Inscripton reussie"); </script> ';
                print_r($_POST);
                }  
            }
            else
            {
                echo '<script> alert("Veuillez rempplir les champs"); </script> ';
            }            
            if (!empty($userId)) {
                Flash::error("Le compte n'a pas ete cree");
                Flash::error("Veuillez vous inscrire");
            }
            
        }
    }
}

        // Flash::success("Flash message successfully integrated");    // message flash intégré avec succèss
        // Flash::success("Insertion reussie");

   

        // public function insert($name, $email, $password)
        // {

        // if (isset($_POST['inscrire'])) {

           

            // $user = (new AuthServices())->signUp();

            // if (!empty($user)) {
            //     echo "Inscription reussie";
            //     header("location:signin.php");
            // }
            // if ($password !== $cpassword) {
            //     echo "le mot de passe est incorrect. veuillez réessayer";
            // } else if (strlen($password) < 8) {
            //     echo "le mot de passe doit contenir au moins 8 caractères";
            // } else {
            //     echo "mot de passe valider";
            // }
        
    
    

