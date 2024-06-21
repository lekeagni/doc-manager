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

    public function signin(){

        global $userId;

       
        // if(isset($_POST['signin'])){
            
        //     $email=$_POST['email1'];
        //     $password=$_POST['pwd1'];

        //     $userId= (new AuthServices())->signUp($email,$password);
        //     if((!empty($email)) || (!empty($password))){
        //         if($password=$hashed_password)
        //         echo '<script>alert("Connexion reussie !"); </script>';
        //         header("location:user.php");
        //     }
        if(isset($_POST['signin'])){

            //verification si les champs ne sont pas ide
            if((!empty($email)) || (!empty($password))){

                // recuperation des elements du formulaire 
                $email=$_POST['email'];
                $password=$_POST['pwd'];

                $userId = $this->service->signUp($email, $password);

                if ($userId !== null) {
                    // Authentification réussie
                    $_SESSION['userId'] = $userId;
                    echo '<script>alert("Connexion réussie. Bienvenue !");</script>';
        
                    // Redirection vers une page sécurisée
                    header('Location: .php');
                    exit();
                }
                else {
                   // Authentification échouée
                    echo 'Email ou mot de passe incorrect.';
                }

            }
            else {
                echo 'Veuillez saisir à la fois l\'email et le mot de passe.';
            }
        } 
    }     
   
}
        