<?php

require_once 'db.php';
require_once __DIR__.'../../Entity/category.php';

class cateRepo extends Db {

    public function allCategorie(){
        $query = $this->getDb()->query('SELECT * FROM categorie');
        $all = $query->fetchAll();

        foreach ($all as $cate) {
            $avisObject = new user();
            $avisObject->getId();
            $avisObject->getNom();
            $tab[] = $avisObject;
        }
        return $tab ?? [];
    }
}