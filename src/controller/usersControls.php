<?php
require_once __DIR__.'../../repository/usersRepo.php';
require_once __DIR__.'../../Entity/users.php';

class usersControls {

    public function login(){
        if (isset($_SESSION['user'])) {
            header('Location: index.php');
        }
        // Si lutilisateur envoie le formulaire
        
        $error = null;
        
        if (!empty($_POST)) {
            // 1 recup de donnée du formulair et netoyage
            $mail = htmlspecialchars(strip_tags($_POST['email']));
            $pass = htmlspecialchars(strip_tags($_POST['password']));

            $repo = new usersRepo();

            $user = $repo->chechUser($mail);
           
            // 2.1 si oui on verifie
            if ($user) {
                // 3 si MDP et correct ouverture de $_SESSION(3.1 en haut de page)
                if (password_verify($pass, $user['passw'])) {
                    //3.2 enregistre les donner dans une session
                    $_SESSION['user'] = [
                        'id' => $user['id'],
                        'prenom' => $user['prenom'],
                        'nom' => $user['nom'],
                        'email' => $user['mail'],
                        'role' => $user['role'],
                    ];
        
                    // 4 redirection de lutilisateur
                    header('Location: index.php');
                    
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
}