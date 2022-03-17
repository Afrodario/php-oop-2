<?php

trait Disc {

    //Proprietà comuni per tutte le tipologie di dischi
    public $title;
    public $artist;
    public $year;
    public $genre;
    public $price;

    //Costrutture comune per tutte le tipologie di dischi
    public function __construct($_title, $_artist, $_year, $_genre, $_price) {
        $this->title = $_title;
        $this->artist = $_artist;   
        $this->year = $_year;   
        $this->genre = $_genre;   
        $this->price = $_price;      
    }

}

?>