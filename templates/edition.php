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
                <a class="navbar-brand " href="/main">acceuil</a>
                <a class="navbar-brand " href="/add">ajouter un film</a>
                <a class="navbar-brand " href="/admin">Liste Films</a>
            </div>
        </nav>
    </header>
    <main>
        <div class="container">
            <h1>Edition</h1>
            <form action="" method="post">
                <label for="">Titre</label>
                <input type="text">
                <label for="">Auteur</label>
                <input type="text">
                <label for="">Durée</label>
                <input type="text">
                <label for="">Date</label>
                <input type="date">
                <label for="">Catégorie</label>
                <select name="" id="">
                    <?php foreach ($list AS $cates) : ?>
                        <option value=""><?php echo $cates->getNom(); ?></option>
                    <?php endforeach;?>
                </select>
                <label for="">Affiche</label>
                <input type="text">
                <label for="">Film</label>
                <input type="text">
                <label for="">Description</label>
                <textarea name="" id="" cols="30" rows="10"></textarea>
                <button type="submit">Valider</button>
            </form>
        </div>
    </main>
</body>


</html>