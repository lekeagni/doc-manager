<?php

namespace Core\Database;

require_once dirname(dirname(__DIR__)) . DIRECTORY_SEPARATOR . 'autoload.php';

class PasswordHasher 
{
    public function hashPassword($password) {

        $hash = password_hash($password, PASSWORD_DEFAULT);
        return $hash;
    }

    // Fonction pour vérifier si un mot de passe correspond au hachage
    public function verifyPassword($password, $hash) {
        return password_verify($password, $hash);
    }
}