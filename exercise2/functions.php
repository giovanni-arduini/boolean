<?php

    // $password_length = $_GET["password_length"];

    function generatePassword( int $n ): string {
        return bin2hex(random_bytes($n / 2));
    }

    // echo generatePassword($password_length);

?>