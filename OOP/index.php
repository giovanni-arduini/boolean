<?php
// i traits DEVONO essere caricati prima, in modo tale che funzionino quando carichiamo i Models
require_once "./Traits/Password.php";

require_once "./Models/User.php";
require_once "./Models/Address.php";
require_once "./Models/Admin.php";


    
    $indirizzo_carlo = new Address("Via codice", "24", "Milano", "20144");
    $indirizzo_ilaria = new Address("Corso del Debug", "55a", "Canicattì", "33144");
    
    $carlo = new User("Carlo", "carll@mail.com", 5, $indirizzo_carlo);
    $ilaria = new User("Ilaria", "ila@mail.com", 22, $indirizzo_ilaria);

    $admin = new Admin("Gigi", "gg@mgail.com", 3, $indirizzo_carlo, "Moderator");

    // echo $admin->getRole();

    $carlo->setEmail("carlo@gmail.com");

    var_dump($carlo->getEmail());



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