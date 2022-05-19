<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>BledFlix</title>
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@600&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="homeStyle.css">
</head>
<body>
    <header>
        <nav>
            <a href="index.php">
            <img src="images/netflixLogo.png" alt="Logo Netflix">
            </a>
        </nav>
    </header>
    <div class="tqt">
        <form action="" method="POST">
            <input type="text" name="nom" id="nom" placeholder="Nom">
            <input type="text" name="prenom" id="prenom" placeholder="Prenom">
            <input type="email" name="email" placeholder="Adresse mail">
            <input type="password" name="password" placeholder="Mot de passe">
            <input type="password" name="confPass" placeholder="Mot de passe">
            <input type="submit" value="Connexion">
            <?php if (isset($error)){echo $error;}?>
            <div>
                <a class="none lien" href="" >
                    <img class="imgFB" src="images/téléchargement.png" alt="FaceBook connexion">
                    <p>S'inscrire avec Facebook</p>
                </a>
            </div>
            <p class="gray2">Cette page est protégée par Google reCAPTCHA pour nous assurer que vous n'êtes pas un robot.</p>
        </form>
    </div>
</body>
</html>