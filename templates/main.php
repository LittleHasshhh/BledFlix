<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bledflix</title>
    <link rel="stylesheet" href="css/home.css">
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <!-- JavaScript Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
</head>

<body>
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
                                <li><a class="dropdown-item" href="/categorie?id=<?php echo $cate->getId(); ?>">Action</a></li>
                                <li><a class="dropdown-item" href="/categorie?id=<?php echo $cate->getId(); ?>">Science Fiction</a></li>
                                <li><a class="dropdown-item" href="/categorie?id=<?php echo $cate->getId(); ?>">Emotion</a></li>
                                <li><a class="dropdown-item" href="/categorie?id=<?php echo $cate->getId(); ?>">Jeunesse</a></li>
                                <li><a class="dropdown-item" href="/categorie?id=<?php echo $cate->getId(); ?>">Comedie</a></li>
                                <li><a class="dropdown-item" href="/categorie?id=<?php echo $cate->getId(); ?>">Documentaire</a></li>
                                <li><a class="dropdown-item" href="/categorie?id=<?php echo $cate->getId(); ?>">Drame</a></li>
                                <li><a class="dropdown-item" href="/categorie?id=<?php echo $cate->getId(); ?>">Policier</a></li>
                                <li><a class="dropdown-item" href="/categorie?id=<?php echo $cate->getId(); ?>">Horreur</a></li>
                            </ul>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="input-group mb-3 space">
                <p class="input-group-text" id="inputGroup-sizing-default">Recherche</p>
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
</body>

</html>