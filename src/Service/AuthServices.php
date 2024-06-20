<?php

namespace App\Service;

require_once dirname(dirname(__DIR__)) . DIRECTORY_SEPARATOR . 'autoload.php';

use Core\Database\DBConnection;
// use App\Entity\Role;
use App\Entity\User;
// use Core\Database\PasswordHasher;
use Core\FlashMessages\Flash;




class AuthServices
{
    private \PDO $connection;

    public function __construct() {
        $dbconnection = new DBConnection();
        $this->connection = $dbconnection->getConnection();
    }
    public function signUp(User|array $data): ?User {
        if (is_array($data)) {
            $user = $this->toEntity($data);
        } else {
            $user = $data;
        }
        if (empty($user->getName())) {
            Flash::error("Veuillez remplir votre nom");
            return null; // si l'utilisateur
        }
     
        else{
            $sql="SELECT * FROM user WHERE email=?";
            $statement=$this->connection->prepare($sql);
            $statement->execute();
            $result=$statement->rowCount()>0;
            if($result){
                Flash::error("cet utilisateur existe déjà. Connectez vous juste");
            }
            
            return null;

        }
    }
    
    public function toEntity(array $rawData): int {
       global $result;
        $user = new User(array ($rawData));
        // print_r($rawData); 
        //  die();
        
        if (isset($rawData['id']) && !empty($rawData['id'])) {
          $user->getId();
        }
        if (isset($rawData['name']) && !empty($rawData['name'])) {
             $user->getName();
         }
         if (isset($rawData['email']) && !empty($rawData['email'])) {
             $user->getEmail();
         }
         if (isset($rawData['password']) && !empty($rawData['password'])) {
             $user->getPassword();
         }else{
            $user1=$user->getName();
            $user2=$user->getEmail();
            $user3=$user->getPassword();
            $hashed_password=password_hash($user3, PASSWORD_DEFAULT);
            $user4=$user->getRoleId();

                
            $sql ="INSERT INTO `users`( `name`, `email`, `password`,`role_id`) VALUES (?,?,?,?)";
            $statement=$this->connection->prepare($sql);
            $statement->bindParam(':name',$user1 );
            $statement->bindParam(':email',$user2  );
            $statement->bindParam(':password',$hashed_password);
            $statement->bindParam(':role_id',$user4);
            $query=$statement->execute($rawData);
                
            if ($query){
                $result=1;
            }else{
                $result=0;
            }
        }
           
        return 1;
    }



        // if (isset($rawData['id']) && !empty($rawData['id'])) {
        //     $user->setId($rawData['id']);
        // }
        // if (isset($rawData['name']) && !empty($rawData['name'])) {
        //     $user->setName($rawData['name']);
        // }
        // if (isset($rawData['email']) && !empty($rawData['email'])) {
        //     $user->setEmail($rawData['email']);
        // }
        // if (isset($rawData['password']) && !empty($rawData['password'])) {
        //     $user->setPassword($rawData['passwrd']);
        // }
        // if (isset($rawData['grade']) && !empty($rawData['grade'])) {
        //     $user->setGrade($rawData['grade']);
        // }
        // if (isset($rawData['created']) && !empty($rawData['created'])) {
        //     $user->setCreated($rawData['created']);
        // }
        // if (isset($rawData['created_by']) && !empty($rawData['created_by'])) {
        //     $user->setcreatedBy($rawData['created_by']);
        // }
        // if (isset($rawData['modified_by']) && !empty($rawData['modified_by'])) {
        //     $user->setModifiedBy($rawData['modified_by']);
        // }
        // if (isset($rawData['modified_date']) && !empty($rawData['modified_date'])) {
        //     $user->setModifiedDate($rawData['modified_date']);
        // }
        // if (isset($rawData['deleted']) && !empty($rawData['deleted'])) {
        //     $user->setDeleted($rawData['deleted']);
        // }
        // if (isset($rawData['role_id']) && !empty($rawData['role_id'])) {
        //     $user->setRoleId($rawData['role_id']);
        // }
        // if (isset($rawData['statuts']) && !empty($rawData['statuts'])) {
        //     $user->setStatuts($rawData['statuts']);
        // }

        
   

    
        // $sql ="INSERT INTO `users`( `name`, `email`, `password`, `grade`, `created`, `created_by`, `modified_by`, `modified_date`, `deleted`, `role_id`,'statuts') VALUES (?,?,?,?,?,?,?,?,?,?,?)";

        // try {

        //     $this->connection->getConnection();

        //     $statement = $this->connection->getConnection()->prepare($sql);

        //     $statement->bindParam(':name', $user->getName(),\PDO::PARAM_STR);
        //     $statement->bindParam(':email', $user->getEmail(),\PDO::PARAM_STR );
        //     $statement->bindParam(':password', $user->getPassword(),\PDO::PARAM_STR);
        //     $statement->bindParam(':grade', $user->getGrade(),\PDO::PARAM_STR);
        //     $statement->bindParam(':created',$user->getCreated(),\PDO::PARAM_INT);
        //     $statement->bindParam(':created_by', $user->getCreatedBy(),\PDO::PARAM_STR);
        //     $statement->bindParam('modified_by',$user->getModifiedBy(),\PDO::PARAM_STR);
        //     $statement->bindParam(':modified_date', $user->getModifiedDate(),\PDO::PARAM_INT);
        //     $statement->bindParam(':deleted', $user->getDeleted(),\PDO::PARAM_INT);
        //     $statement->bindParam(':role_id', $user->getRoleId(),\PDO::PARAM_INT);
        //     $statement->bindParam(':role_id', $user->getStatuts(),\PDO::PARAM_STR);
        //     $statement->execute();
        //     $userId = $this->connection->getConnection();

            // $this->connection->getConnection();

    //         return (int)$userId;
    //     } catch (\PDOException $e) {
    //         throw new \Exception("SQL Exception: " . $e->getMessage());
    //     }
    // }



//     public function insert($name, $email, $password)
//     {   
//         $hasher = new PasswordHasher();
//         $hashedPassword = $hasher->hashPassword($password);

//         // recuperation des informations de users associer au roles
       
//         $sql = "SELECT u.id AS Users_id, u.name AS Users_name, u.email AS Users_email, u.grade AS Users_grade, u.created AS Users_created, u.created_by AS Users_created_by, u.modified AS Users_modified, u.modified_by AS Users_modified_by, u.deleted, AS Users_deleted, r.id AS Role_id, u.statuts AS Users_statuts
//             FROM Users u 
//             JOIN roles r ON r.id = u.role_id 
//             WHERE u.email = ? AND u.pwd = ?";
           
//         try {
//             $stmt= $this->connection->prepare($sql);
//             $stmt->execute([$email, $hashedPassword]);
//             $result = $stmt->fetch(\PDO::FETCH_ASSOC);
//         } catch (\PDOException $e) {
//             throw new \Exception("SQL Exception: " . $e->getMessage());
//         }

//         if (empty($result)) {
//             return null;
//         }
//         // Si des résultats sont trouvés, la méthode crée des instances des objets Roles et Users,
//         // puis attribue les valeurs correspondantes aux propriétés de ces objets à partir des résultats de la requête.

//         $role = new Role();
//         $role->setId($result['Role_id']);
//         $role->setRoleName($result['Role_name']);
//         $role->setDescription($result['Role_description']);

//         $users = new User();
//         $users->setId($result['Users_id']);
//         $users->setName($result['Users_name']);
//         $users->setEmail($result['Users_email']);
//         $users->setPassword($result['Users_password']);
//         $users->setGrade($result['Users_grade']);
//         $users->setCreated($result['created']);
//         $users->setCreatedBy($result['Users_created_by']);
//         $users->setModifiedBy($result['Users_modified_by']);
//         $users->setModifiedDate($result['Users_modified_date']);
//         $users->setDeleted($result['Users_deleted']);
//         $users->setRoleId($result['Users_role_id']);
//         $users->setStatuts($result['Users_statuts']);
       
//         return $users;
    }
 


                                    