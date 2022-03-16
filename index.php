<?php
// Oggi pomeriggio provate ad immaginare quali sono le classi necessarie per creare uno shop online con le seguenti caratteristiche.
// L’e-commerce vende prodotti per gli animali.
// I prodotti saranno oltre al cibo, anche giochi, cucce, etc.
// L’utente potrà sia comprare i prodotti senza registrarsi, oppure iscriversi e ricevere il 20% di sconto su tutti i prodotti.
// Il pagamento avviene con la carta di credito, che non deve essere scaduta.
// BONUS:
// Alcuni prodotti (es. antipulci) avranno la caratteristica che saranno disponibili solo in un periodo particolare (es. da maggio ad agosto).

require_once __DIR__ . '/classes/User.php';
require_once __DIR__ . '/classes/RegisteredUser.php';
require_once __DIR__ . '/classes/Product.php';
require_once __DIR__ . '/classes/Food.php';
require_once __DIR__ . '/classes/Accessories.php';

$firstUser = new User("Homer", "Simpson");
$secondUser = new RegisteredUser("Ned", "Flanders", "flanders@gmail.com");

var_dump($firstUser);
var_dump($secondUser);

$dogFood = new Food("Multifit", 23, "Cane", "MEDICA", "Pollo", 10);
$catAccessory = new Accessories("Trixie", 7, "Gatto", "MEOW", "Ciotola", "Eat-on-Feet");

var_dump($dogFood);
var_dump($catAccessory);

?>