<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    
        
    // $students = [
    //     ["name" => "Gigi", "grade"=>10],
    //     ["name" => "Alice", "grade"=>8],
    //     ["name" => "Sara", "grade"=>9],
    // ];

    //     foreach ($students as $student){

    //         foreach ($student as $key => $value)

    //         echo $key . "  $value - "  ;
    //         echo "<br>";

    //     }

    // for ($i=0; $i <10; $i++){

    //     echo "Clap! <br>";
        
    // };


    $numbers = [];
    $sum = 0;
    $counter = 0;

    do {

        $randomNumber = rand(1, 10);

        $numbers[] = $randomNumber;
        $somma += $randomNumber;
        
        $counter++;

    } while ($sum < 50);
    
    echo "La somma totale dei numeri è: " . $sum . ", e sono state eseguite " . $counter . "operazioni.";

    ?>
</body>
</html>