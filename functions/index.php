<?php

    // function sum(int $num_1, int $num_2){
    //     return $num_1 + $num_2;
    // }

    // function salute(string $username = "guest") : string {
    //     return "Ciao " . $username;
    // }

    require "./functions.php";
   
    $name = "Gio";

    session_start();
    $_SESSION["username"] = $name

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

    <?php
     include "./header.php";
    ?>




    <a href="cart.php">Vai al carrello!</a>

    
</body>
</html>