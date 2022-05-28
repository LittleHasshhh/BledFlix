<?php

require_once __DIR__.'../../repository/dataBase.php';
require_once __DIR__ . '../../Entity/categorie.php';
require_once __DIR__ . '../../Entity/film.php';

class cateRepo extends Db
{

    public function allCategorie()
    {
        $query = $this->getDb()->query('SELECT * FROM categorie');
        $all = $query->fetchAll();

        foreach ($all as $cate) {
            $avisObject = new categorie();
            $avisObject->setId($cate['id']);
            $avisObject->setNom($cate['nom']);
            $tab[] = $avisObject;
        }
        return $tab ?? [];
    }

    public function films()
    {
        $query = $this->getDb()->query('SELECT film.id, film.Titre, film.description, film.date, film.auteur, film.duree, film.auteur, film.affiche, film.lien_film, film.categorie_id FROM film');
        $all = $query->fetchAll();

        foreach ($all as $allFilms) {

            $avisObject = new film();
            $avisObject->setId($allFilms['id']);
            $avisObject->setCategorie($allFilms['categorie_id']);
            $avisObject->setTitre($allFilms['Titre']);
            $avisObject->setDescription($allFilms['description']);
            $avisObject->setDate($allFilms['date']);
            $avisObject->setAuteur($allFilms['auteur']);
            $avisObject->setDuree($allFilms['duree']);
            $avisObject->setAffiche($allFilms['affiche'] ?? "images/vide.png");
            $avisObject->setLienfiche($allFilms['lien_film']);
            $tab[] = $avisObject;
        }
        return $tab ?? [];
    }


    public function editfilm(int $id)
    {
        $query = $this->getDb()->prepare('SELECT film.id, film.Titre, film.description, film.date, film.auteur, film.duree, film.auteur, film.affiche, film.lien_film, film.categorie_id, categorie.nom FROM film INNER JOIN categorie ON film.categorie_id = categorie.id WHERE film.id = :id');
        $query->bindValue(':id', $id, PDO::PARAM_INT);
        $query->execute();
        
        return $all = $query->fetch();



    }

    public function oneForAll(int $id)
    {
        $query = $this->getDb()->prepare('SELECT * FROM film WHERE categorie_id = :id');
        $query->bindValue(':id', $id, PDO::PARAM_INT);
        $query->execute();
        $all = $query->fetchAll();
        

        foreach ($all as $allFilms) {

            $avisObject = new film();
            $avisObject->setId($allFilms['id']);
            $avisObject->setCategorie($allFilms['categorie_id']);
            $avisObject->setTitre($allFilms['Titre']);
            $avisObject->setDescription($allFilms['description']);
            $avisObject->setDate($allFilms['date']);
            $avisObject->setAuteur($allFilms['auteur']);
            $avisObject->setDuree($allFilms['duree']);
            $avisObject->setAffiche($allFilms['affiche'] ?? "images/vide.png");
            $avisObject->setLienfiche($allFilms['lien_film']);
            $tab[] = $avisObject;
        }
        return $tab ?? [];

    }

    public function supprimer(int $id){
        $query = $this->getDb()->prepare('DELETE FROM film WHERE film.id = :id');
        $query->bindValue(':id', $id, PDO::PARAM_INT);

        return $query->execute();
    }

    public function search(string $name)
    {
        $query = $this->getDb()->prepare('SELECT * FROM film WHERE titre = :name');
        $query->bindValue(':name', $name);
        $query->execute();
        $all = $query->fetchAll();
        

        foreach ($all as $allFilms) {

            $avisObject = new film();
            $avisObject->setId($allFilms['id']);
            $avisObject->setCategorie($allFilms['categorie_id']);
            $avisObject->setTitre($allFilms['Titre']);
            $avisObject->setDescription($allFilms['description']);
            $avisObject->setDate($allFilms['date']);
            $avisObject->setAuteur($allFilms['auteur']);
            $avisObject->setDuree($allFilms['duree']);
            $avisObject->setAffiche($allFilms['affiche'] ?? "images/vide.png");
            $avisObject->setLienfiche($allFilms['lien_film']);
            $tab[] = $avisObject;
        }
        return $tab ?? [];

    }
    
    public function editBdd(int $id, string $title, string $autor, string $time, string $date, int $cateId, string $img, string $video, string $desc){
        $query = $this->getDb()->prepare('UPDATE film SET Titre = :title, description = :descr, date = :datex, auteur = :autor, duree = :time, affiche = :img, lien_film = :video, categorie_id  = :cateId WHERE id = :id');
        $query->bindValue(':id', $id, PDO::PARAM_INT);
        $query->bindValue(':title', $title);
        $query->bindValue(':descr', $desc);
        $query->bindValue(':datex', $date);
        $query->bindValue(':autor', $autor);
        $query->bindValue(':time', $time);
        $query->bindValue(':img', $img);
        $query->bindValue(':video', $video);
        $query->bindValue(':cateId', $cateId, PDO::PARAM_INT);

        return $query->execute();
    }

    public function addBdd(string $title, string $autor, string $time, string $date, int $cateId, string $img, string $video, string $desc){
        $query = $this->getDb()->prepare('INSERT INTO film  (Titre, description, date, auteur, duree, affiche, lien_film, categorie_id) VALUES (:title, :descr, :datex, :autor, :time, :img, :video, :cateId)');
        $query->bindValue(':title', $title);
        $query->bindValue(':descr', $desc);
        $query->bindValue(':datex', $date);
        $query->bindValue(':autor', $autor);
        $query->bindValue(':time', $time);
        $query->bindValue(':img', $img);
        $query->bindValue(':video', $video);
        $query->bindValue(':cateId', $cateId, PDO::PARAM_INT);

        return $query->execute();
    }
}
