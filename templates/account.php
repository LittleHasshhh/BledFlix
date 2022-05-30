<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bledflix</title>
    <link rel="stylesheet" href="css/account.css">
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
                    <img src="images/bledflix.png" alt="Logo Netflix" class="logo">
                </a>
            </div>
            <div class="collapse navbar-collapse compte " id="navbarNavDarkDropdown">
                <ul class="navbar-nav">
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDarkDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        <?php echo $admin2;?>
                        </a>
                        <ul class="dropdown-menu dropdown-menu-dark" aria-labelledby="navbarDarkDropdownMenuLink">
                            <?php echo $admin;?>
                            <li><a class="dropdown-item" href="/logOut">Deconnecté</a></li>
                        </ul>
                    </li>
                </ul>
            </div>
        </nav>
    </header>
    <main>
        <section>
            <h1>Modification du compte</h1>
            <div class="accountForm">
                <form method="post">
                    <label for="prenom">Prenom</label>
                    <input type="text" name="prenom" id="prenom">
                    <label for="nom">Nom</label>
                    <input type="text" name="nom" id="prenom">
                    <label for="mail">Adresse Mail</label>
                    <input type="text" name="mail" id="mail">
                    <label for="passw">Mot de Passe</label>
                    <input type="password" name="passw" id="passw">
                    <label for="prenom">Comfirmez le Mot de passe</label>
                    <input type="password" name="prenom" id="prenom">
                    <button>Valider les changements</button>
                </form>
            </div>
        </section>
    </main>
</body>
</body>

</html>