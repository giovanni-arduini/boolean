<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Saluto!</title>
</head>
<body>
    <h1>Ti saluto</h1>

    <h2>
        <?php 
        
        echo "Ciao " . $_GET["nominativo"] . "!";
        
        ?>
    </h2>
</body>
</html>