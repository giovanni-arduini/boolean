<?php

    session_start();

    echo $_SESSION["password"];

    var_dump($_GET["length"]);
 

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Your Password</title>
</head>
<body>
    
<h1>
    Your password of <?php echo $_GET["lenght"]?> characters
    <?php
        $_SESSION["password"]
    ?>
</h1>

</body>
</html>