<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    
        
    $students = [
        ["name" => "Gigi", "grade"=>10],
        ["name" => "Alice", "grade"=>8],
        ["name" => "Sara", "grade"=>9],
    ];

        foreach ($students as $student){

            foreach ($student as $key => $value)

            echo $key . "  $value - "  ;
            echo "<br>";

        }

    ?>
</body>
</html>