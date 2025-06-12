<?php 

$nominativo = $_GET["nominativo"];
var_dump($_GET);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Saluto!</title>
</head>
<body>

<?php phpinfo(); ?>

    <pre><?php 
    
            var_dump($_GET)

        ?>  
    </pre>

    <h1>Ti saluto</h1>

    <h2>
      Ciao <?php echo $nominativo?>!
    </h2>
</body>
</html>