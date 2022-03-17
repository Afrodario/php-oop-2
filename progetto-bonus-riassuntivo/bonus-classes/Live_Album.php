<?php
require_once __DIR__ . "/Album.php";

class Live_Album extends Album {

    public $venue;

    public function __construct($_title, $_artist, $_year, $_genre, $_price, $_venue) {

        parent::__construct($_title, $_artist, $_year, $_genre, $_price);
        $this->venue = $_venue;
    }


}



?>