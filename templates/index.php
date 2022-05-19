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
<body class="homePage">
    <header>
        <nav>
            <a href="index.php">
            <img src="images/netflixLogo.png" alt="Logo Netflix">
            </a>
        </nav>
        <?php if ($test){echo $test;}
        ?>
    </header>
    <div class="tqt">
        <form action="" method="POST">
            <h2>S'identifier</h2>
            <input type="email" name="email" placeholder="Adresse mail">
            <input type="password" name="password" placeholder="Mot de passe">
            <input type="submit" value="Connexion">
            <div class="lien">
                <input type="checkbox" id="save">
                <label for="save">Se souvenir de moi</label>
            </div>
            <?php
            if ($error) {
                echo $error;
            }
            ?>
            <div>
                <a class="none lien" href="" >
                    <img class="imgFB" src="images/téléchargement.png" alt="FaceBook connexion">
                    <p>S'identifier avec Facebook</p>
                </a>
            </div>
            <p class="gray">Premiere visite sur Netflix ? <a class="ins" href="create">Inscrivez-vous</a></p>
            <p class="gray2">Cette page est protégée par Google reCAPTCHA pour nous assurer que vous n'êtes pas un robot.</p>
        </form>
    </div>
</body>
</html>