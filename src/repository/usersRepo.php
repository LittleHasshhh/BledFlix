<?php

require_once 'db.php';

class usersRepo extends Db {
    public function chechUser(string $mail) {
        $query = $this->getDb()->prepare('SELECT * FROM users WHERE mail = :mail');
        $query->bindValue(':mail', $mail);
        $query->execute();
    
        return $query->fetch();
    }
}