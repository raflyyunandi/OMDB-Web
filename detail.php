<?php

$id = $_GET['id'];
$film = file_get_contents('http://www.omdbapi.com/?apikey=6476d9c5&i=' . $id);
$film = json_decode($film, true);

?>


<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

    <title>Rekweb Movie</title>
</head>

<body>
    <div class="container">
        <div class="row">
            <div class="col">
                <h2>Movie Details</h2>
            </div>
        </div>

        <div class="row">
            <div class="col-3">
                <img src="<?= $film['Poster'] ?>" class="img-fluid">
            </div>
            <div class="col-7">
                <ul class="list-group">
                    <li class="list-group-item">
                        <h3><?= $film['Title'] ?> <?= $film['Year'] ?></h3>
                    </li>
                    <li class="list-group-item">
                        <strong>Director : </strong><?= $film['Director'] ?>
                    </li>
                    <li class="list-group-item">
                        <strong>Writer : </strong><?= $film['Writer'] ?>
                    </li>
                    <li class="list-group-item">
                        <strong>Cast : </strong> <?= $film['Actors'] ?>
                    </li>
                    <li class="list-group-item">
                        <?= $film['Plot'] ?>
                    </li>
                    <li class="list-group-item">
                        <a href="index.html" class="btn btn-success">Kembali</a>
                        <a href="https://www.imdb.com/title/<?= $id ?>/" class="btn btn-primary">Menuju ke IMDB</a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</body>

</html>