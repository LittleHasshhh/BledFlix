<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bledflix</title>
    <link rel="stylesheet" href="css/categorie.css">
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <!-- JavaScript Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
</head>

<body>
    <header>
        <nav class="navbar navbar-expand-lg navbar-dark lien">
            <div class="flex ">
                <a href="/main">
                    <img src="images/bledflix.png" alt="Logo bledflix" class="logo">
                </a>
                <a class="navbar-brand " href="/main">Accueil</a>
                <div class="collapse navbar-collapse " id="navbarNavDarkDropdown">
                    <ul class="navbar-nav">
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="navbarDarkDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                CATEGORIES
                            </a>
                            <ul class="dropdown-menu dropdown-menu-dark" aria-labelledby="navbarDarkDropdownMenuLink">
                                <?php foreach ($list as $cate) {
                                    echo "<li><a class='dropdown-item' href='/categorie?id={$cate->getId()}'>{$cate->getNom()}</a></li>";
                                } ?>
                                <u></u>
                            </ul>
                        </li>
                    </ul>
                </div>
            </div>
            <form action="search" method="get">
                <label for="search">Recherche</label>
                <input type="text" name="search" id="search">
                <button></button>
            </form>
            <div class="collapse navbar-collapse compte " id="navbarNavDarkDropdown">
                <ul class="navbar-nav">
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDarkDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        <?php echo $admin2;?>
                        </a>
                        <ul class="dropdown-menu dropdown-menu-dark" aria-labelledby="navbarDarkDropdownMenuLink">
                            <li><a class="dropdown-item" href="/account">Compte</a></li>
                            <?php echo $admin;?>
                            <li><a class="dropdown-item" href="/logOut">Deconnecté</a></li>
                        </ul>
                        
                    </li>
                </ul>
            </div>
        </nav>
    </header>
    <main>
        <section class="wrap">
                <?php 
                    foreach ($allFilms as $key) {
                        echo "
                        <div class='filmdiv'}>
                            <div class='imgDiv'>
                                <img class='imgFilm' src='{$key->getAffiche()}' alt='{$key->getTitre()}'>
                            </div>
                        </div>";    
                    }
                ?>
        </section>
        
    </main>
</body>

</html>

