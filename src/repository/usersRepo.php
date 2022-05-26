<?php

require_once __DIR__.'../../repository/dataBase.php';
require_once __DIR__.'../../Entity/users.php';

class usersRepo extends Db {

    public function checkUser(string $mail) {
        $query = $this->getDb()->prepare('SELECT * FROM utilisateur WHERE mail = :mail');
        $query->bindValue(':mail', $mail);
        $query->execute();
    
        return $query->fetch();
    }

    public function createUser(user $user) {
        try {
            $query = $this->getDb()->prepare('INSERT INTO utilisateur (prenom, nom, mail, password, role) VALUES (:prenom, :nom, :mail, :password, :role)');
            $query->bindValue(':prenom', $user->getPrenom());
            $query->bindValue(':nom', $user->getNom());
            $query->bindValue(':mail', $user->getMail());
            $query->bindValue(':password', $user->getPassword());
            $query->bindValue(':role', "ROLE_USER");
            $query->execute();

        } catch (Exception $exe) {
            die("error on insertion {$exe->getMessage()}");
        }
        return $this->getDb()->lastInsertId();
    }

}