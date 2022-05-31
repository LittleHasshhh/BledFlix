<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bledflix</title>
    <link rel="stylesheet" href="css/accountupdate.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@48,400,0,0" />
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
        </nav>
    </header>
    <main>
        <section>
            <div class="title">
                <h1>Modification du compte</h1>
                <a href="account">
                    <img src="images/retour.svg" alt="">
                    Retour au compte
                </a>
            </div>
            <div class="accountForm">
                <form method="post">
                    <label for="prenom">Prenom</label>
                    <input type="text" name="prenom" id="prenom" value="<?php echo $info['prenom'];?>">
                    <label for="nom">Nom</label>
                    <input type="text" name="nom" id="nom" value="<?php echo $info['nom'];?>">
                    <label for="mail">Adresse Mail</label>
                    <input type="text" name="mail" id="mail" value="<?php echo $info['mail'];?>">
                    <label for="passw">Mot de Passe</label>
                    <input type="password" name="password" id="passw">
                    <label for="confPass">Comfirmez le Mot de passe</label>
                    <input type="password" name="confPass" id="confPass">
                    <button>Valider les changements</button>
                </form>
            </div>
        </section>
    </main>
</body>
</body>

</html>