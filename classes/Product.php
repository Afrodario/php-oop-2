<?php

class Product {

    public $name;
    public $price;
    public $animal;
    public $brand;

    public function __construct($_name, $_price, $_animal, $_brand) {
        $this->name = $_name;
        $this->price = $_price;
        $this->animal = $_animal;
        $this->brand = $_brand;
        
    }

}


?>