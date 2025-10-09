<?php

class User {
    // proprietà
    public $name;
    protected $email;
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


    public function setEmail($email){

        // if(strlen($email)>=6 && str_contains($email, "@") && str_contains($email, ".")){
        //     $this->email = $email;
        // } else {
        //     return "La mail deve avere almeno 6 caratteri";
        // }

        // soluzione semplificata e ottimizzata con filter_var
        if(filter_var($email, FILTER_VALIDATE_EMAIL)){
            $this->email = $email;
        }

    }

    public function getEmail(){
        return $this->email;
    }



}
 
?>