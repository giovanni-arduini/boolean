<?php

    class Movie{

        public $title;
        public $director;
        public $year;
        public $genre;
        public $rating;


        public function __construct($_title, $_director, $_year, $_genre) {
            $this->$title = $_title;
            $this->$director = $_director;
            $this->$year = $_year;
            $this->$genre = $_genre;
        }


        public function isClassic(){
            return $this->rating > 4;
        }

        public function isVintage(){
            return $this->year <= 1980; 
        }

    }

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
</body>
</html>