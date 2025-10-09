<?php

class Admin extends User {
        public $role;

        use Password;

        public function __construct($_name, $email, $age, Address $_address, $_role)
        {

            // Includo il costruttore della classe parente in modo da passargli come parametri i valori necessari
            parent::__construct($_name, $email,$age,  $_address,);

            // parametro per proprietà esclusiva di Admin
            $this->role = $_role;
        }

        public function getRole(){
            return "My role is: " . $this->role;
        }
}

?>