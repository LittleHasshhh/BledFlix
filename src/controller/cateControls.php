<?php


require_once __DIR__.'../../Entity/users.php';

class cateControls {

    public function avis(){
        $allAvis = new cateRepo();
        $list = $allAvis->allCategorie();
        require_once __DIR__.'../../../templates/avis.php';
    }
}