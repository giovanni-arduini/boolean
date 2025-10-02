<?php
$nominativo = $_GET["nominativo"];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Saluto <?php echo $nominativo?></title>
</head>
<body>

<!-- con pre posso preformattare il contenuto -->
<pre>
    <?php var_dump($_GET)?>
</pre>

<h2>
Ciao <?php echo $nominativo?>!
</h2>

    
</body>
</html>