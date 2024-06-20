<?php
// require_once dirname(dirname(dirname(__DIR__))) . DIRECTORY_SEPARATOR . 'autoload.php';
// use Core\Database\DBConnection;
// use App\Entity\User;

// class UsersServices{
//     public $dbconnection;
//     public function __construct(){
        
//         $this->dbconnection=new DBConnection();
//     }
    
//     public function insertUser($name,$email,$password,$grade,$created,$created_by,$modified_by,$modified_date,$deleted,$role_id,$statuts){
//         $user=new User();

//         $user->setCreated(date('Y-m-d H:i:s'));
//         $user->setCreatedBy(null);
//         $user->setModifiedBy(null);
//         $user->setModifiedDate(null);
//         $user->setDeleted(null);
//         $user->setStatuts('active');
        
//         $hashed_password = password_hash($password, PASSWORD_DEFAULT);

//         $sql="INSERT INTO `users`( `name`, `email`, `password`, `grade`, `created`, `created_by`, `modified_by`, `modified_date`, `deleted`, `role_id`,'statuts') VALUES (?,?,?,?,?,?,?,?,?,?,?)";
//       try{
//             $statement=$this->dbconnection->getConnection()->prepare($sql);
//             $statement->bindParam(':name', $name);
//             $statement->bindParam(':email', $email );
//             $statement->bindParam(':password', $hashed_password);
//             $statement->bindParam(':grade', $grade);
//             $statement->bindParam(':created', $created);
//             $statement->bindParam(':created_by', $created_by);
//             $statement->bindParam('modified_by', $modified_by);
//             $statement->bindParam(':modified_date', $modified_date);
//             $statement->bindParam(':deleted', $deleted);
//             $statement->bindParam(':role_id', $role_id);
//             $statement->bindParam(':role_id', $statuts);
            
//             if($statement->execute()){
//                 return true;  //insetion reussie
//             }else{
//                 return false;  //erreur lors de l'insertion
//             }
//         }
//         catch(PDOException $e){
//             throw new \Exception("SQL Exception: " . $e->getMessage());
//         }
//     }

//     }
    