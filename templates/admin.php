<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bledflix</title>
    <link rel="stylesheet" href="css/admin.css">
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
                <a class="navbar-brand " href="/main">Acceuil</a>
                <a class="navbar-brand " href="/add">Ajouter un film</a>
            </div>
        </nav>
    </header>
    <main>
        <table>
            <tbody>
                <?php
                    foreach ($allFilms as $key) {
                        $desc = substr($key->getDescription(), 0, 150);
                        echo "<tr class='flexible'>
                                <td><img class='imgFilm' src='{$key->getAffiche()}'></img></td>
                                <td>{$key->getTitre()}</td>
                                <td>{$key->getAuteur()}</td>
                                <td>{$desc}</td>
                                <td class='date'>{$key->getDate()}</td>
                                <td class='id'>
                                    <div class='flex'>
                                        <a href='/edite?id={$key->getId()}' class='href edit'>Editer</a>
                                        <a href='/sup?id={$key->getId()}' class='href sup'>supprimer</a>
                                    </div>
                                </td>
                              </tr>";
                    }
                ?>
            </tbody>
        </table>
    </main>
</body>
</body>

</html>