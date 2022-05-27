<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bledflix</title>
    <link rel="stylesheet" href="css/edition.css">
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
                    <img src="images/bledflix.png" alt="Logo bledflix">
                </a>
                <a class="navbar-brand " href="/main">Acceuil</a>
                <a class="navbar-brand " href="/add">Ajouter un film</a>
                <a class="navbar-brand " href="/admin">Liste films</a>
            </div>
        </nav>
    </header>
    <main>
        <h1>Edition</h1>
        <form action="" method="post">
            <div class="flex1">
                <div class="flex2">
                    <label for="title">Titre</label>
                    <input type="text" name="title" id="title" value="<?php echo $success['Titre'];?>">
                    <label for="auteur">Auteur</label>
                    <input type="text" name="auteur" id="auteur" value="<?php echo $success['auteur'];?>">
                    <label for="time">Durée</label>
                    <input type="text" name="time" id="time" value="<?php echo $success['duree'];?>">
                    <label for="date">Date</label>
                    <input type="text" name="date" id="date" value="<?php echo $success['date'];?>">
                </div>
                <div class="flex3">
                    <label for="cate">Catégorie</label>
                    <select name="cate" id="cate">
                        <option value="<?php echo $success['categorie_id'];?>"><?php echo $success['nom'];?></option>
                        <?php foreach ($list AS $cates) : ?>
                            <option value="<?php echo $cates->getId();?>"><?php echo $cates->getNom();?></option>
                        <?php endforeach;?>
                    </select>
                    <label for="img">Affiche</label>
                    <input type="text" name="img" id="img" value="<?php echo $success['affiche'];?>">
                    <label for="lienF">Film</label>
                    <input type="text" name="lienF" id="lienF" value="<?php echo $success['lien_film'];?>">
                    <label for="desc">Description</label>
                    <textarea name="desc" id="desc" cols="30" rows="5"><?php echo $success['description'];?></textarea>
                </div>
            </div>
            <button type="submit">Valider</button>
        </form>
    </main>
</body>


</html>