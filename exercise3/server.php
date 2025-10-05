<?php
$albums_file = __DIR__.'/albums.json';

// Legge gli album esistenti come oggetti
$albums = [];
if(file_exists($albums_file)){
    $albums = json_decode(file_get_contents($albums_file));
}

// Crea un nuovo album come oggetto stdClass
$new_album = new stdClass();
foreach($_POST as $key => $value){
    $new_album->$key = $value;
}

// Aggiunge il nuovo album
$albums[] = $new_album;

// Salva l’array aggiornato nel file JSON
file_put_contents($albums_file, json_encode($albums, JSON_PRETTY_PRINT));

// Reindirizza per evitare il resubmission
header('Location: index.php');
exit;
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

    <h1>Nuovo album inserito!</h1>


    
</body>
</html>