<?php

    require_once "./functions.php";

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <title>Document</title>
    <link rel="stylesheet" href="index.css" >

</head> 
<body>

<div class="container-fluid">
    <h1 class="mx-auto" style="width: 200px;">
        Albums
    </h1>
    
    <hr>

    <div>
        <form action="./server.php" method="POST">
            <input type="text" name="title" id="title" placeholder="Titolo">

            <input type="text" name="artist" id="artist" placeholder="Artista">

            <input type="number" min="1900" max="2025" name="year" id="year" placeholder="Anno">
            <input type="text" name="genre" id="genre" placeholder="Genere">

            <input type="text" name="cover" id="cover" placeholder="Immagine di copertina">

            <button>Inserisci un nuovo album!</button>
        </form>
    </div>

    <hr>
    
     <div class="row justify-content-center">
        <?php foreach($albums as $album): ?>
            <div class="col-md-3 mb-4 d-flex">
                <div class="card album-card">
                    <img src="<?= $album->cover ?: 'https://via.placeholder.com/300x200' ?>" 
                        class="card-img-top album-img" 
                        alt="<?= $album->title ?>">
                    <div class="card-body d-flex flex-column">
                        <h5 class="card-title"><?= $album->artist ?></h5>
                        <p class="card-text"><?= $album->title ?> </p>
                        <p class="card-text"><?= $album->year ?></p>
                        <p class="card-text"><?= $album->genre ?></p>
                    </div>
                </div>
            </div>
        <?php endforeach; ?>
    </div>


</div>


</body>
</html>