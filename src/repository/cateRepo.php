<?php

require_once 'db.php';
require_once __DIR__.'../../Entity/category.php';

class cateRepo extends Db {

    public function allCategorie(){
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
}