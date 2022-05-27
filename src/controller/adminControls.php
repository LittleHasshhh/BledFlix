<?php
require_once __DIR__.'../../Entity/categorie.php';
require_once __DIR__.'../../repository/cateRepo.php';
class adminControls {

    public function admin() {
        if (!isset($_SESSION['user']) && $_SESSION['user']['role'] !== "ROLE_ADMIN") {
            header('Location: /');
        }
        $cateRepo = new cateRepo();
        $allFilms = $cateRepo->films();

        require_once __DIR__. '../../../templates/admin.php';
    }
    public function sup(){
        $supAvis = new cateRepo();
        $success = $supAvis->supprimer(htmlspecialchars(strip_tags($_GET['id'])));
        header('Location: /admin?delete='. $success);

        require_once __DIR__. '../../../templates/sup.php';
        

    }

    public function add() {
        require_once __DIR__. '../../../templates/add.php';
    } 

    public function edit() {
        require_once __DIR__. '../../../templates/edition.php';
    } 
}