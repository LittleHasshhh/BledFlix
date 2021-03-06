<?php

class film {


    private int $id;
    private int $categorie;
    private string $Titre;
    private string $description;
    private string $date;
    private string $auteur;
    private int $duree;
    private string $affiche = "images/vide.png";
    private string $lienfiche;

    public function getId(){
        return $this->id;
    }

    public function getCategorie(){
        return $this->categorie;
    }

    public function setCategorie(int $categorie){
        $this->categorie = $categorie;

        return $this;
    }

    public function getTitre()
    {
        return $this->Titre;
    }

    /**
     * Set the value of Titre
     *
     * @return  self
     */ 
    public function setTitre($Titre)
    {
        $this->Titre = $Titre;

        return $this;
    }

    /**
     * Get the value of description
     */ 
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * Set the value of description
     *
     * @return  self
     */ 
    public function setDescription(string $description)
    {
        $this->description = $description;

        return $this;
    }

    /**
     * Get the value of date
     */ 
    public function getDate()
    {
        return $this->date;
    }

    /**
     * Set the value of date
     *
     * @return  self
     */ 
    public function setDate(string $date)
    {
        $this->date = $date;

        return $this;
    }

    /**
     * Get the value of auteur
     */ 
    public function getAuteur()
    {
        return $this->auteur;
    }

    /**
     * Set the value of auteur
     *
     * @return  self
     */ 
    public function setAuteur(string $auteur)
    {
        $this->auteur = $auteur;

        return $this;
    }

    /**
     * Get the value of duree
     */ 
    public function getDuree()
    {
        return $this->duree;
    }

    /**
     * Set the value of duree
     *
     * @return  self
     */ 
    public function setDuree(string $duree)
    {
        $this->duree = $duree;

        return $this;
    }

    /**
     * Get the value of affiche
     */ 
    public function getAffiche()
    {
        return $this->affiche;
    }

    /**
     * Set the value of affiche
     *
     * @return  self
     */ 
    public function setAffiche(string $affiche)
    {
        $this->affiche = $affiche;

        return $this;
    }

    /**
     * Get the value of lienfiche
     */ 
    public function getLienfiche()
    {
        return $this->lienfiche;
    }

    /**
     * Set the value of lienfiche
     *
     * @return  self
     */ 
    public function setLienfiche(string $lienfiche)
    {
        $this->lienfiche = $lienfiche;

        return $this;
    }

    /**
     * Set the value of id
     *
     * @return  self
     */ 
    public function setId($id)
    {
        $this->id = $id;

        return $this;
    }
}