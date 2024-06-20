<?php

namespace App\Service;

require_once dirname(dirname(dirname(__DIR__))) . DIRECTORY_SEPARATOR . 'autoload.php';

use App\Classes\UserRole;
use app\Entity\Role;
use  Core\Database\DBConnection;

//namespace App\Service;

class RolesServices
{
    private \PDO $connection;

    public function __construct() {

        $dbconnection = new DBConnection();
        $this->connection = $dbconnection->getConnection();
    }

    /**
     * Get all roles
     *
     * @return array<Role>
     */

    public function getByName(UserRole $name): ?Role
    {
        $sql = "SELECT * FROM roles WHERE role_name = :name";
        try {
            // requete pour selectionner tous les roles 

            $stmt = $this->connection->prepare($sql);
            $stmt->bindParam(':name', $name, \PDO::PARAM_STR);
            $stmt->execute();
            $result = $stmt->fetch(\PDO::FETCH_ASSOC);
        } catch (\PDOException $e) {
            throw new \Exception("SQL Exception: " . $e->getMessage());
        }

        if (empty($result)) {
            $role = new Role();

            $role->setId($result['id']);
            $role->setRoleName($result['role_name']);
            $role->setDescription($result['description']);

            return $role;
        } else {
            return null;
        }
    }
}
