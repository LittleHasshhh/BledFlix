<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>BledFlix</title>
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@600&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="css/homeStyle.css">
    <link rel="stylesheet" href="css/nav.css">
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <!-- JavaScript Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>


    
</head>

<body class="homePage">
    <header>



        <nav class="navbar navbar-expand-lg navbar-dark bg-dark lien">
            <div class="flex ">    
                <a href="index.php">
                    <img src="images/netflixLogo.png" alt="Logo Netflix">
                </a>
                <a class="navbar-brand " href="#">Menu</a>
                <div class="collapse navbar-collapse " id="navbarNavDarkDropdown">
                    <ul class="navbar-nav">
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="navbarDarkDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                CATEGORIES
                            </a>
                            <ul class="dropdown-menu dropdown-menu-dark" aria-labelledby="navbarDarkDropdownMenuLink">
                                <li><a class="dropdown-item" href="#">Action</a></li>
                                <li><a class="dropdown-item" href="#">Science Fiction</a></li>
                                <li><a class="dropdown-item" href="#">Emotion</a></li>
                                <li><a class="dropdown-item" href="#">Jeunesse</a></li>
                                <li><a class="dropdown-item" href="#">Comedie</a></li>
                                <li><a class="dropdown-item" href="#">Documentaire</a></li>
                                <li><a class="dropdown-item" href="#">Drame</a></li>
                                <li><a class="dropdown-item" href="#">Policier</a></li>
                                <li><a class="dropdown-item" href="#">Horreur</a></li>
                            </ul>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="input-group mb-3 space">
                <span class="input-group-text" id="inputGroup-sizing-default">Recherche</span>
                <input type="text" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default">
            </div>
            
            <div class="collapse navbar-collapse compte " id="navbarNavDarkDropdown">
                    <ul class="navbar-nav">
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="navbarDarkDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                               Utilisateur
                            </a>
                            <ul class="dropdown-menu dropdown-menu-dark" aria-labelledby="navbarDarkDropdownMenuLink">
                                <li><a class="dropdown-item" href="#">Compte</a></li>
                                <li><a class="dropdown-item" href="#">Centre d'aide</a></li>
                                <li><a class="dropdown-item" href="#">deconnecté</a></li>
                                
                            </ul>
                        </li>
                    </ul>
                </div>
        </nav>




    </header>
    <div class="tqt">
        <form action="">
            <h2>S'identifier</h2>
            <input type="email" placeholder="Adresse mail">
            <input type="password" placeholder="Mot de passe">
            <input type="submit" value="Connexion">
            <div class="miguel">
                <input type="checkbox" id="save">
                <label for="save">Se souvenir de moi</label>
                <a class="aide" href="#">Besoin d'aide ?</a>
            </div>
            <div class="miguel">
                <a class="none" href="">
                    <img class="imgFB" src="images/téléchargement.png" alt="FaceBook connexion">
                    <p>S'identifier avec Facebook</p>
                </a>
            </div>
            <p class="gray">Premiere visite sur Netflix ? <a class="ins" href="#">Inscrivez-vous</a></p>
            <p class="gray2">Cette page est protégée par Google reCAPTCHA pour nous assurer que vous n'êtes pas un robot.</p>
        </form>
    </div>


</body>

</html>