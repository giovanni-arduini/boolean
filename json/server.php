<!-- riceviamo il testo 

<?php

// echo $_POST["new_todo"];

// leggere il file dei todo
$todos_text = file_get_contents("./todos.json");
$todos = json_decode($todos_text);

// aggiungo il nuovo elemento all'array
$todos[] = $_POST["new_todo"];

// converto in stinga json
$json_text_updated = json_encode($todos);
var_dump($json_text_updated);

// sovrascriviamo il contenuto del fil .json
file_put_contents("./todos.json", $json_text_updated);

?> -->


<?php
if (!isset($_POST['new_todo']) || $_POST['new_todo'] === '') {
  echo "Nessun dato ricevuto.";
  exit;
}

$todos_text = file_get_contents('./todos.json');
$todos = json_decode($todos_text, true);

if (!is_array($todos)) {
  $todos = [];
}

$todos[] = $_POST['new_todo'];

$json_text_updated = json_encode($todos, JSON_PRETTY_PRINT);
file_put_contents('./todos.json', $json_text_updated, LOCK_EX);

echo "Todo aggiunto con successo!";

header("Location: index.php");
exit;

?>