<?php
require_once __DIR__ . '/Product.php';

class Food extends Product {

    public $flavor;
    public $kgPerPackage;
    

    public function __construct($_name, $_price, $_animal, $_brand, $_flavor, $_kgPerPackage) {
        
        parent::__construct($_name, $_price, $_animal, $_brand);

        $this->flavor = $_flavor;
        $this->kgPerPackage = $_kgPerPackage;

    }

}


?>