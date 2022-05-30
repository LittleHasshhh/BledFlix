<?php

require_once __DIR__.'../../Entity/users.php';
require_once __DIR__.'../../repository/usersRepo.php';

class accountControls {
    public function accountPage() {
        if (isset($_SESSION['user']) && $_SESSION['user']['role'] !== "ROLE_ADMIN") {
            $admin = "<li><a class='dropdown-item' href='#'>Centre d'aide</a></li>";
            $admin2 = "mon compte";

        }elseif (isset($_SESSION['user']) && $_SESSION['user']['role'] === "ROLE_ADMIN"){
            $admin = "<li><a class='dropdown-item' href='/admin'>Menu Admin</a></li>";
            $admin2 = "tableau de bord";
        }
        require_once __DIR__. '../../../templates/account.php';
    }

    public function accountUpdate() {
        $id = $_SESSION['user']['id'];

        $userInfo = new usersRepo();
        $info = $userInfo->selectUser($id);

        if (isset($_POST)) {
            if (!empty($_POST)) {
                if (!empty($_POST['password']) && !empty($_POST['confPass']) && !empty($_POST['email']) && !empty($_POST['nom']) && !empty($_POST['prenom'])) {
                    if ($_POST['password'] === $_POST['confPass']) {
                        foreach ($_POST as $key => $value) {
                            htmlspecialchars(strip_tags($_POST[$key]));
                        }
                        $_POST['password'] = password_hash($_POST['password'], PASSWORD_ARGON2I);
    
                        $user = new usersRepo();
                        $success = $user->update($id, $_POST['password'], $_POST['email'], $_POST['nom'], $_POST['prenom']);
                        
                        if ($success) {
                            header('Location: /account?update='. $success);
                        }
                    }
                }   
            }
        }
        
        require_once __DIR__. '../../../templates/accountUpdate.php';
    }
}