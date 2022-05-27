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
        if (!isset($_SESSION['user']) && $_SESSION['user']['role'] !== "ROLE_ADMIN") {
            header('Location: /');
        }
        $supAvis = new cateRepo();
        $success = $supAvis->supprimer(htmlspecialchars(strip_tags($_GET['id'])));
        if ($success) {
            header('Location: /admin?delete='. $success);
        }

        require_once __DIR__. '../../../templates/sup.php';
        

    }

    public function add() {
        if (!isset($_SESSION['user']) && $_SESSION['user']['role'] !== "ROLE_ADMIN") {
            header('Location: /');
        }
        require_once __DIR__. '../../../templates/add.php';
    } 

    public function edit() {
        if (!isset($_SESSION['user']) && $_SESSION['user']['role'] !== "ROLE_ADMIN") {
            header('Location: /');
        }

        if (!empty($_GET['id'])) {
            $pb = htmlspecialchars(strip_tags($_GET['id']));
            $editfilm = new cateRepo();
            $success = $editfilm->editfilm($pb);

            $allAvis = new cateRepo();
            $list = $allAvis->allCategorie();

            if (isset($_POST)) {
                if (!empty($_POST)) {
                    foreach ($_POST as $key => $value) {
                        echo htmlspecialchars(strip_tags($_POST[$key]));
                    }
                    $edit = new cateRepo();
                    $successEdit = $edit->editBdd($pb, $_POST['title'], $_POST['auteur'], $_POST['time'], $_POST['date'], $_POST['cate'], $_POST['img'], $_POST['lienF'], $_POST['desc']);
                    if ($successEdit) {
                        header('Location: /admin?edit='. $success);
                    }
                }
            }
        }
        

        require_once __DIR__. '../../../templates/edition.php';
    } 
}