<?php
require_once __DIR__ . '/Product.php';

class Accessories extends Product {

    public $type;
    public $model;
    

    public function __construct($_name, $_price, $_animal, $_brand, $_type, $_model) {
        
        parent::__construct($_name, $_price, $_animal, $_brand);

        $this->type = $_type;
        $this->model = $_model;

    }

}


?>