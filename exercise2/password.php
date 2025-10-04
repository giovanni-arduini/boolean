<?php
session_start();

$letters = [
  'A','B','C','D','E','F','G','H','I','J','K','L','M',
  'N','O','P','Q','R','S','T','U','V','W','X','Y','Z',
  'a','b','c','d','e','f','g','h','i','j','k','l','m',
  'n','o','p','q','r','s','t','u','v','w','x','y','z'
];

$symbols = [
  '!', '@', '#', '$', '%', '^', '&', '*', '(', ')',
  '-', '_', '+', '=', '{', '}', '[', ']', '|', '\\',
  ':', ';', '"', "'", '<', '>', ',', '.', '?', '/',
  '~', '`'
];

$numbers = [0,1,2,3,4,5,6,7,8,9];
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Password Result</title>
</head>
<body>

<h1>Your password is:</h1>

<?php
if (isset($_SESSION["length"]) && $_SESSION["length"] > 0) {
    $length = $_SESSION["length"];

    $pool = [];

    if (isset($_SESSION["letters"])) {
        $pool = array_merge($pool, $letters);
    }

    if (isset($_SESSION["symbols"])) {
        $pool = array_merge($pool, $symbols);
    }

    if (isset($_SESSION["numbers"])) {
        $pool = array_merge($pool, $numbers);
    }
    $keys = array_rand($pool, $length);

    if (!is_array($keys)) {
        $password = $pool[$keys];
    } else {
        $password = implode('', array_map(fn($k) => $pool[$k], $keys));
    }

    echo "<h2>$password</h2>";
} else {
    echo "<p>Nessuna lunghezza impostata in sessione.</p>";
}
?>

</body>
</html>
