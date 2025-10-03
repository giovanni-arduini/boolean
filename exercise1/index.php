<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<!-- Array di hotel -->
<?php

    $hotels = [

        [
            'name' => 'Hotel Belvedere',
            'description' => 'Hotel Belvedere Descrizione',
            'parking' => true,
            'vote' => 4,
            'distance_to_center' => 10.4
        ],
        [
            'name' => 'Hotel Futuro',
            'description' => 'Hotel Futuro Descrizione',
            'parking' => true,
            'vote' => 2,
            'distance_to_center' => 2
        ],
        [
            'name' => 'Hotel Rivamare',
            'description' => 'Hotel Rivamare Descrizione',
            'parking' => false,
            'vote' => 1,
            'distance_to_center' => 1
        ],
        [
            'name' => 'Hotel Bellavista',
            'description' => 'Hotel Bellavista Descrizione',
            'parking' => false,
            'vote' => 5,
            'distance_to_center' => 5.5
        ],
        [
            'name' => 'Hotel Milano',
            'description' => 'Hotel Milano Descrizione',
            'parking' => true,
            'vote' => 2,
            'distance_to_center' => 50
        ],

    ];

    // Controllo filtro parcheggio
    $parking_requested = false;

    if(isset($_GET["parking"]) && $_GET["parking"] == "on"){
        $parking_requested = true;
    };

    var_dump($parking_requested);


    // controllo filtro per voto
    $minimum_vote = 0;

    if(isset($_GET["minimum_vote"]) && is_numeric($_GET["minimum_vote"]) && $_GET["minimum_vote"] >= 0 && $_GET["minimum_vote"] <=5 ){
        echo "Voto minimo: " . $_GET["minimum_vote"];
        $minimum_vote = (int)$_GET["minimum_vote"];
    };

    var_dump($minimum_vote)


?>

<!-- Tabella -->
    <h1>Hotels</h1>
    <hr>
    
    <h2>Filtri</h2>
    <form action="">

        <div>
            <input type="checkbox" name="parking" id="parking">
            <label for="parking">Presenza parcheggio</label>
        </div>


        <div>
            <input type="number" min="1", max="5" name="minimum_vote" id="minimum_vote">
            <label for="minimum_vote">Voto minimo</label>
        </div>

        <button>Filtra</button>
    </form>
    <hr>


    <table>
        <thead>
            <tr>
                <td>Nome</td>
                <td>Descrizione</td>
                <td>Parcheggio</td>
                <td>Voto</td>
                <td>Distanza dal centro</td>
            </tr>
        </thead>
        <tbody>
            <?php
            
            foreach($hotels as $hotel){
                // la variabile dei parcheggi è true 
                if($parking_requested){
                    // controllo se hotel ha parcheggio
                    if(!$hotel["parking"]){
                        // e se non ce l'ha saltiamo il ciclo
                        continue;
                    } 
                }

                // controlliamo se il voto è maggiore o uguale al minimo settato
                if($hotel["vote"] < $minimum_vote){
                    continue;
                }

                 ?>
                    <tr>
                        <td><?php echo $hotel["name"]?></td>
                        <td><?php echo $hotel["description"]?></td>
                        <td>                            
                            <?php 
                                echo $hotel["parking"] ? "Presente" : "Assente"
                            ?>
                        </td>
                        <td><?php echo $hotel["vote"]?></td>
                        <td><?php echo $hotel["distance_to_center"]?></td>
                       
                    </tr>
                 <?php
            }
            ?>
        </tbody>
    </table>
    
</body>
</html>