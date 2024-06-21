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
    public function signUp($email):int {

       global  $query;

        $count=1;

        $sql="SELECT * FROM users WHERE email=:EMAIL";
       
            $statement=$this->connection->prepare($sql);
            $statement->bindParam(':email',$email);
            $statement->fetch(\PDO::FETCH_ASSOC);
            $query=$statement->execute();
            
        return $count;
    }



  
    // public function signUp($name, $email, $password){
    //     global $query;

    //     if(is_array($name, $email, $password)){
    //         $user=$this->toEntity($name, $email, $password);
    //     }else{
    //         $sql=$this->connection->prepare("SELECT* FROM user WHERE email=:EMAIL");
    //         $query=$sql->execute();
    //         $stmt= $query->rowCount()>0;          
    //         // if($query->rowCount()>0){
    //         //     return 1;
    //         // }
    //     }
       

   
    // // public function signUp(User|array $data): ?User {
    // //     if (is_array($data)) {
    // //         $user = $this->toEntity($data);
    // //     } else {
    // //         $user = $data;
    // //     }
    // //     if (empty($user->getName())) {
    // //         Flash::error("Veuillez remplir votre nom");
    // //         return null; // si l'utilisateur
    // //     }
     
    // //     else{
    // //         $sql="SELECT * FROM user WHERE email=?";
    // //         $statement=$this->connection->prepare($sql);
    // //         $statement->execute();
    // //         $result=$statement->rowCount();
    // //         if($result){
    // //             Flash::error("cet utilisateur existe déjà. Connectez vous juste");
    // //         }
            
    // //         return null;

    // //     }
    //  }
    
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