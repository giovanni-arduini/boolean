<?php
session_start();

if (isset($_GET["letters"])) $_SESSION["letters"] = true;
if (isset($_GET["symbols"])) $_SESSION["symbols"] = true;
if (isset($_GET["numbers"])) $_SESSION["numbers"] = true;
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Password Generator</title>
</head>
<body>

  <form action="save_length.php" method="get">
    <div>
      <input type="number" min="5" max="20" name="length" id="length" required>
      <label for="length">Scegli la lunghezza della password</label>
    </div>

    <div>
        <h5>Deve contenere:</h5>
        <input type="checkbox" name="letters" id="letters">
        <label for="letters">Lettere</label>

        <input type="checkbox" name="numbers" id="numbers">
        <label for="numbers">Numeri</label>

        <input type="checkbox" name="symbols" id="symbols">
        <label for="symbols">Simboli</label>
    </div>

    <button type="submit">Crea password</button>
  </form>

</body>
</html>
