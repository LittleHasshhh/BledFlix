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

    public function update(int $id, string $pass, string $mail, string $nom, string $prenom) {
        $query = $this->getDb()->prepare('UPDATE utilisateur SET prenom = :prenom, nom = :nom, mail = :mail, password = :password WHERE id = :id');
        $query->bindValue(':id', $id, PDO::PARAM_INT);
        $query->bindValue(':prenom', $prenom);
        $query->bindValue(':nom', $nom);
        $query->bindValue(':mail', $mail);
        $query->bindValue(':password', $pass);

        return $query->execute();
    }

    public function selectUser(int $id){
        $query = $this->getDb()->prepare('SELECT * FROM utilisateur WHERE id = :id');
        $query->bindValue(':id', $id, PDO::PARAM_INT);
        $query->execute();

        return $all = $query->fetch();
    }

}