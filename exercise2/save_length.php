<?php
session_start();

// salva la lunghezza nella sessione
if (isset($_GET["length"])) {
    $_SESSION["length"] = $_GET["length"];
}

if (isset($_GET["numbers"])) {
    $_SESSION["numbers"] = $_GET["numbers"];
}

if (isset($_GET["letters"])) {
    $_SESSION["letters"] = $_GET["letters"];
}

if (isset($_GET["symbols"])) {
    $_SESSION["symbols"] = $_GET["lengsymbolsth"];
}


// reindirizza alla pagina che genera la password
header("Location: password.php");
exit;
?>