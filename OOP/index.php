<?php

require_once "./Models/User.php";
require_once "./Models/Address.php";
require_once "./Models/Admin.php";

    
    $indirizzo_carlo = new Address("Via codice", "24", "Milano", "20144");
    $indirizzo_ilaria = new Address("Corso del Debug", "55a", "Canicattì", "33144");
    
    $carlo = new User("Carlo", "carll@mail.com", 5, $indirizzo_carlo);
    $ilaria = new User("Ilaria", "ila@mail.com", 22, $indirizzo_ilaria);

    $admin = new Admin("Moderator");

    echo $admin->getRole();

    var_dump($admin);



?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
</body>
</html>