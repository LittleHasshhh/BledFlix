<?php

class categorie {

   private int $id;
   private string $nom;




   /**
    * Get the value of id
    */ 
   public function getId()
   {
      return $this->id;
   }

   /**
    * Set the value of id
    *
    * @return  self
    */ 
   public function setId(int $id)
   {
      $this->id = $id;

      return $this;
   }

   /**
    * Get the value of nom
    */ 
   public function getNom()
   {
      return $this->nom;
   }

   /**
    * Set the value of nom
    *
    * @return  self
    */ 
   public function setNom(string $nom)
   {
      $this->nom = $nom;

      return $this;
   }
}



