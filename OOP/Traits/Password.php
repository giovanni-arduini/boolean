<?php

    trait Password {

        public $password;

        public function setPassword( $newPassword ){
            if(strlen($newPassword) >= 5){
                $this->password = $newPassword;
            } else {
                echo "La nuova password deve avere almeno 5 caratteri";
            }
        }
    }

?>