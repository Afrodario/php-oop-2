<?php

require_once __DIR__ . "/bonus-classes/Album.php";
require_once __DIR__ . "/bonus-classes/Live_Album.php";

require_once __DIR__ . "/bonus-classes/User.php";

$Bad = new Album("Bad", "Michael Jackson", 1987, "R&B", 9.99);
$TheConfessionsTour = new Live_Album("The Confessions Tour", "Madonna", 2006, "Live", 19, "Madison Square Garden");

$User_01 = new User ("Peter", "Parker");

try {
    $User_01->setEmail("peterparker@gmail.com");
} catch (Exception $e) {
    echo $e->getMessage();
};


var_dump($Bad);
var_dump($TheConfessionsTour);

var_dump($User_01);


?>