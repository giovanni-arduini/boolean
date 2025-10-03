<?php

    function sum(int $num_1, int $num_2){
        return $num_1 + $num_2;
    }

    function salute(string $username = "guest") : string {
        return "Ciao " . $username;
    }

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>
        <?php
        $username = salute();
        echo $username;
        ?>
    </h1>
    
</body>
</html>