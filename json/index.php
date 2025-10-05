<?php
require_once "./functions.php";
echo $undefined_variable;

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <title>Document</title>
</head>
<body>
    <div class="container-fluid">
        <h1>TODOs</h1>

        <hr>

        <div class="mb-3 py-3">
            <ul class="mb-2">
                <?php
                foreach($todos as $todo){
                    echo"<li>$todo</li>";
                }?>
            </ul>

            <form action="server.php" method="POST">
                <div class="form-control ">
                    <input type="text" id="new_todo" name="new_todo">
                    <button>Aggiungi</button>
                </div>
            </form>
        </div>

    </div>
</body>
</html>