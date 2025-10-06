<?php

class Admin extends User {
        public $role;

        public function __construct($_role)
        {
            $this->role = $_role;
        }

        public function getRole(){
            return "My role is: " . $this->role;
        }
}

?>