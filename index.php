<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Il mio primo PHP</title>
  </head>
  <body>
    <h1>
    Ciao mamma!
    </h1>
    
    <!-- questo è uno squacio php -->
    <?php 
    // sono un commento!

    
    // echo serve per visualizzare codice in pagina
    echo "E ciao mondo!";
    
    echo "<br>";
    // variabili
    $name = "Gio";
    
    // supervariabili globali
	  echo "Ciao anche a " . $_GET["name"] . "!";

    // $eta = 34;
    // echo $eta;
    ?>
  </body>
</html>
