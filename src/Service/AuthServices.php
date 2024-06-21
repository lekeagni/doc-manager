<?php

namespace App\Service;

require_once dirname(dirname(__DIR__)) . DIRECTORY_SEPARATOR . 'autoload.php';

use Core\Database\DBConnection;
use App\Entity\User;


class AuthServices
{
    private \PDO $connection;

    public function __construct() {
        $dbconnection = new DBConnection();
        $this->connection = $dbconnection->getConnection();
    }
    public function signUp($email,$password):int {
        $user=new User('','', $email, $password);
        $user1=$user->getEmail();
        $user2=$user->getPassword();

        $sql="SELECT * FROM users WHERE email=:email";
       
        $statement=$this->connection->prepare($sql);
        $statement->bindParam(':email',$user1);
        $statement->bindParam(':passwords',$user2);
       
        $statement->execute();
        $query=$statement->fetch(\PDO::FETCH_ASSOC);

        if ( $statement->execute()) {
                // Vérification du mot de passe
            if (password_verify($user2, $query['password'])) {
                // Authentification réussie
                return 1;                
            }

        }
           return 0;
    }

    public function toEntity($name, $email, $password): int {
       global $result;
        $user = new User('',$name, $email, $password,'');
        // print_r($rawData); 
        //  die();

            $user1=$user->getName();
            $user2=$user->getEmail();
            $user3=$user->getPassword();
            $hashed_password=password_hash($user3, PASSWORD_DEFAULT);
            $user4=1;
   
            $sql ="INSERT INTO users( names, email, passwords, role_id) VALUES (:names,:EMAIL,:PASSWORDS,:ROLE_ID)";
            $statement=$this->connection->prepare($sql);
            $statement->bindParam(':names',$user1 );
            $statement->bindParam(':EMAIL',$user2  );
            $statement->bindParam(':PASSWORDS',$hashed_password);
            $statement->bindParam(':ROLE_ID',$user4);
            //  print_r($user1,$user2,$hashed_password,$user4);
            //  die();
            $query=$statement->execute();
                
            if ($query){
                $result=1;
            }else{
                $result=0;
            }
        
           
        return 1;
    }
}