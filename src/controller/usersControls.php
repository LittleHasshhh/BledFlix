<?php
require_once __DIR__.'../../repository/usersRepo.php';
require_once __DIR__.'../../Entity/users.php';
require_once __DIR__.'../../repository/cateRepo.php';

class usersControls {

    public function login(){
        if (isset($_SESSION['user'])) {
            header('Location: /main');
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
        if (isset($_SESSION['user'])) {
            header('Location: /main');
        }
        if (!empty($_POST)){
            if (!empty($_POST['password']) && !empty($_POST['confPass']) && !empty($_POST['email']) && !empty($_POST['nom']) && !empty($_POST['prenom'])) {
                if ($_POST['password'] === $_POST['confPass']) {
                    $mail = htmlspecialchars(strip_tags($_POST['email']));
                    $pass = htmlspecialchars(strip_tags($_POST['password']));
                    $nom = htmlspecialchars(strip_tags($_POST['nom']));
                    $prenom = htmlspecialchars(strip_tags($_POST['prenom']));

                    $pass = password_hash($pass, PASSWORD_ARGON2I);

                    $user = new user();
                    $user->setNom($nom);
                    $user->setPrenom($prenom);
                    $user->setPassword($pass);
                    $user->setMail($mail);

                    $userRep = new usersRepo();

                    $id = $userRep->createUser($user);
                    

                    $_SESSION['user'] = [
                        'id' => $id,
                        'prenom' => $user->getPrenom(),
                        'nom' => $user->getNom(),
                        'email' => $user->getMail(),
                        'role' => "ROLE_USER"
                    ];

                    header('Location: /main');

                }else {
                    $error = "Les Mot de passe ne corespond pas ";
                }
            }else {
                $error = "Il faut remplir tous les champs";
            }

        }
        require_once __DIR__. '../../../templates/create.php';
    }

    public function mainPage(){
        $allAvis = new cateRepo();
        $list = $allAvis->allCategorie();
        if (isset($_SESSION['user']) && $_SESSION['user']['role'] !== "ROLE_ADMIN") {
            $admin = "<li><a class='dropdown-item' href='#'>Centre d'aide</a></li>";

        }elseif (isset($_SESSION['user']) && $_SESSION['user']['role'] === "ROLE_ADMIN"){
            $admin = "<li><a class='dropdown-item' href='/admin'>Menu Admin</a></li>";
        }
        require_once __DIR__. '../../../templates/main.php';
    }

    public function logOut(){
        session_start();

        session_unset();

        session_destroy();

        header('Location: /');
    }

}