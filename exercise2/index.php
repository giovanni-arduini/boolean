<?php


$password = "";

if($password != ""){
        // dirottiamo alla pagina password
        header("Location: ./password.php");


        session_start();
        // salviamo la pass in un avariabile di sessione

        function generatePassword($n): string {
            $password =  bin2hex(random_bytes($n/2));
            $_SESSION["password"] = $password;
        }

        generatePassword($_GET["length"]);


    }

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Password Generator</title>
</head>
<body>
<!-- Form per settare lunghezza -->

<h1>Create a random password!</h1>

<form action="password.php">
    <input type="number" min="4" max="20" name="length" id="length">
    <label for="length">Inserisci la lunghezza della password</label>
    <button>Genera password</button>
</form>

</body>
</html>