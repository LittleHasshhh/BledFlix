<?php


require_once __DIR__.'../../Entity/category.php';
require_once __DIR__.'../../repository/cateRepo.php';

class cateControls {

    public function cateList(){

        $cateRepo = new cateRepo();
        $allFilms = $cateRepo->films();

        require_once __DIR__ . '../../../templates/main.php';
    }

}

