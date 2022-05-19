<?php
require_once __DIR__.'../../repository/usersRepo.php';
require_once __DIR__.'../../Entity/users.php';

class usersControls {

    public function login(){
        if ($_SESSION['user']['role'] === "ROLE_ADMIN") {
            $test = "<a href='/main'>HOME PAGE</a>";
        }elseif (isset($_SESSION['user'])) {
            header('Location: /main');
        }else {
            header('Location: /');
        }
        // Si lutilisateur envoie le formulaire
        
        $error = null;

        if (!empty($_POST)) {
            // 1 recup de donnée du formulair et netoyage
            $mail = htmlspecialchars(strip_tags($_POST['email']));
            $pass = htmlspecialchars(strip_tags($_POST['password']));
            $repo = new usersRepo();

            $user = $repo->checkUser($mail);
            // 2.1 si oui on verifie
            if ($user) {
                // 3 si MDP et correct ouverture de $_SESSION(3.1 en haut de page)
                if (password_verify($pass, $user['password'])) {
                    echo $user['password'];
                    //3.2 enregistre les donner dans une session
                    $_SESSION['user'] = [
                        'id' => $user['id'],
                        'prenom' => $user['prenom'],
                        'nom' => $user['nom'],
                        'email' => $user['email'],
                        'role' => $user['role'],
                    ];
        
                    // 4 redirection de lutilisateur
                    header('Location: /main');
                    
                } else {
                    // 2.2 sinon afficher une error
                    $error = 'Email et/ou Mot de passe invalid';
                }
                
                
            }else {
                $error = 'Email et/ou Mot de passe invalid';
            }
        }
        require_once __DIR__. '../../../templates/index.php';
    }

    public function create(){
        if (!empty($_POST)){
            $mail = htmlspecialchars(strip_tags($_POST['email']));
            $pass = htmlspecialchars(strip_tags($_POST['password']));
            $pass2 = htmlspecialchars(strip_tags($_POST['confPass']));
            $nom = htmlspecialchars(strip_tags($_POST['nom']));
            $prenom = htmlspecialchars(strip_tags($_POST['prenom']));
        }
        require_once __DIR__. '../../../templates/create.php';
    }

    public function mainPage(){
        require_once __DIR__. '../../../templates/main.php';
    }
}