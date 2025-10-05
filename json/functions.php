<?php

    $json_text = file_get_contents("./todos.json");
    $todos = json_decode($json_text);

?>