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
        $query = $this->getDb()->prepare('SELECT id, Titre, description, date, auteur, duree, auteur, affiche, lien_film FROM film WHERE id = :id');
        $query->bindValue(':id', $id, PDO::PARAM_INT);

        return $query->execute();

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
        $query = $this->getDb()->prepare('DELETE FROM avis WHERE id = :id');
        $query->bindValue(':id', $id, PDO::PARAM_INT);

        return $query->execute();
    }
}