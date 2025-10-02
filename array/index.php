<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Arrays</title>
</head>
<body>
    
    <h1>PHP Fundamentals</h1>

    <?php
    $person = [
        "first_name" => "Gigi",
        "last_name"=>"Lollo",
        "hobby"=>"Soccer"
    ];

    $students = [
        ["name" => "Gigi", "grade"=>10],
        ["name" => "Alice", "grade"=>8],
        ["name" => "Sara", "grade"=>9],
    ];

    echo $students[1]["name"]. " ha preso " . $students[1]["grade"];

    ?>

</body>
</html>