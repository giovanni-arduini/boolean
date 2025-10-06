<?php

class Address {

    public $street;
    public $number;
    public $city;
    public $zip;

    function __construct ( $_street, $_number, $_city,$_zip){
    
        $this->street = $_street;
        $this->number = $_number;
        $this->city = $_city;
        $this->zip = $_zip;

    }
}

?>