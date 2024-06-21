<?php

namespace App\Controller;

require_once dirname(dirname(__DIR__)) . DIRECTORY_SEPARATOR . 'autoload.php';
use App\Service\AuthServices;
use App\Entity\User;
use Core\FlashMessages\Flash;

class AuthController
{
    private $service;

    public function __construct() {
        $this->service = new AuthServices();
    }

    public function signup() {
        global $userId;

        if (isset($_POST['signup'])) {
            // recuperation des elements du formulaire apres soumission
            // print_r($_POST); die();   
            $name=$_POST['name'];
            $email=$_POST['email'];
            $password=$_POST['pwd'];
            $cpassword=$_POST['cpwd'];
            if((!empty($name)) || (!empty($email)) || (!empty($password)) || (!empty($cpassword))){
                if($password==$cpassword){
                    $userId = $this->service->toEntity( $name, $email,$password) ;
                    echo '<script> alert("Inscripton reussie"); </script> ';
                    print_r($_POST);
                } else{               
                    echo '<script> alert("Le mot de passe est incorrect.Veiullez réessayer"); </script> ';
                }  
            } 
            
        }
    }

    public function connect(){

        global $userId;

        if(isset($_POST['signin'])){
       
           
            if((!empty($email)) || (!empty($password))){

                // recuperation des elements du formulaire 
                $email=$_POST['email'];
                $password=$_POST['password'];
               
                
                    $userId = $this->service->signUp($email, $password);
                    if ($userId=1) {                    
                            // Authentification réussie                   
                        echo '<script> alert("Connexion réussie. Bienvenue !"); </script>';
                
                            // Redirection vers la page 
                        header("Location: page.php");
                        exit();
                    }else {
                        echo '<script> alert("Echec lors de la connexion"); </script>';
                    }
                
            }              
            else {
                // Authentification échouée
                echo '<script> alert("Email ou mot de passe incorrect."); </script>';
            }
        }
    } 
}     
   
        