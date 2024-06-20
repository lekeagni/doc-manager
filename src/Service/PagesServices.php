<?php

declare(strict_types=1);

namespace App\Service;

require_once dirname(dirname(__DIR__))  . DIRECTORY_SEPARATOR . 'autoload.php';
use Core\Database\DBConnection;

class PagesServices
{
    public function testDbConnection()
    {
        $dbconnection = new DBConnection();
        $connection = $dbconnection->getConnection();

        if ($connection) {
       
            return "<div class='alert alert-success'> Connexion to database <span class='fw-bold'>" . $dbconnection->getDatabase() . " </span> is established.</div>";
        } else {
            return "<div class='alert alert-danger'> Cannot connect to database. Reason : <span class='fw-bold'> " . $dbconnection->getError() . "</div>";
        }
    }
}
