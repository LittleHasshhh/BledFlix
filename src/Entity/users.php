<?php

class user {
    private int $id;
    private string $prenom;
    private string $nom;
    private string $mail;
    private string $password;
    private string $role;

    public function getRole(){
        return $this->role;
    }

    public function setRole($role){
        $this->role = $role;
        return $this;
    }

    public function getPassword(){
        return $this->password;
    }

    public function setPassword($password){
        $this->password = $password;
        return $this;
    }

    public function getMail(){
        return $this->mail;
    }

    public function setMail($mail){
        $this->mail = $mail;
        return $this;
    }

    public function getNom(){
        return $this->nom;
    }
 
    public function setNom($nom){
        $this->nom = $nom;
        return $this;
    }

    public function getPrenom(){
        return $this->prenom;
    }

    public function setPrenom($prenom){
        $this->prenom = $prenom;
        return $this;
    }

    public function getId(){
        return $this->id;
    }

    public function setId($id){
        $this->id = $id;
        return $this;
    }
}


