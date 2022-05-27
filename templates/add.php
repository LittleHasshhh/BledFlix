<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bledflix</title>
    <link rel="stylesheet" href="css/adminAdd.css">
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <!-- JavaScript Bundle with Popper -->


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>

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
                    <img src="images/bledflix.png" alt="Logo Netflix">
                </a>
                <a class="navbar-brand " href="/main">acceuil</a>
                <a class="navbar-brand " href="/admin">Liste films</a>
            </div>
        </nav>
    </header>
    <main>
        <div class="background">
            <form class="was-validated">


                <div class="form-check mb-3">



                    <div class="input-group mb-3">



                        <div class="mb-3">

                            <span class="input-group-text" id="inputGroup-sizing-default">Titre</span>
                            <input type="text" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default">
                        </div>

                        <div class="mb-3">
                            <span class="input-group-text" id="inputGroup-sizing-default">date</span>
                            <input type="text" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default">
                        </div>

                        <div class="mb-3">
                            <span class="input-group-text" id="inputGroup-sizing-default">duree</span>
                            <input type="text" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default">
                        </div>

                        <div class="mb-3">
                            <span class="input-group-text" id="inputGroup-sizing-default">affiche</span>
                            <input type="text" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default">
                        </div>

                        <div class="mb-3">
                            <span class="input-group-text" id="inputGroup-sizing-default">auteur</span>
                            <input type="text" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default">
                        </div>

                        
                        <div class="mb-3">
                            <span class="input-group-text" id="inputGroup-sizing-default">categorie</span>
                            <select class="form-select" required aria-label="select example">
                        </div>

                        <option value="1">...</option>
                        <option value="1">comedie</option>
                        <option value="2">Action</option>
                        <option value="3">Policier</option>
                        <option value="3">science fiction</option>
                        <option value="3">Documentaire</option>
                        <option value="3">emotion</option>
                        <option value="3">drame</option>

                        </select>

                    </div>


                    <div class="mb-3">
                            <span class="input-group-text" id="inputGroup-sizing-default">lien du film</span>
                            <input type="text" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default">
                        </div>

                    <div class="mb-2">
                        <div class="form-floating">
                            <textarea class="form-control" placeholder="Leave a comment here" id="floatingTextarea2" style="height: 100px"></textarea>
                            <label for="floatingTextarea2">Comments</label>
                        </div>



                        <div class="mb-3">
                            <button class="btn btn-primary" type="submit" disabled>Envoyer</button>
                        </div>
            </form>


        </div>
    </main>
</body>
</body>

</html>