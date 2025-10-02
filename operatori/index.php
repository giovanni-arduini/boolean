<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
<h1>If in PHP</h1>

    <?php

        $number = 5;

        if($number > 5){
            echo "Il numero è maggiore di 5";
        }
        else if ($number==5) {
            echo "Il numero è uguale a 5";
        }
        else {
            echo "Il numero è minore di 5";
        }

        $parola = "C";
        $parola .= "iao";
    ?>

    <h2>
        <?php echo $parola; ?>
    </h2>




</body>
</html>