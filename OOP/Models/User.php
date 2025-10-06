<?php

class User {
    // proprietà
    public $name;
    public $email;
    public $age;
    public $address;


    //costruttore
    function __construct( $_name, $_email, $_age, Address $_address ){
        // qui passiamo i valori dei parametri alle proprietà
        $this->name = $_name;
        $this->email = $_email;
        $this->age = $_age;
        $this->address = $_address;
    }

    // metodi 
    public function isAdult(){
        // restituisce true nel caso di maggiore età
       return $this->age>=18;
    }
}
 
?>