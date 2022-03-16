<?php
// Oggi pomeriggio provate ad immaginare quali sono le classi necessarie per creare uno shop online con le seguenti caratteristiche.
// L’e-commerce vende prodotti per gli animali.
// I prodotti saranno oltre al cibo, anche giochi, cucce, etc.
// L’utente potrà sia comprare i prodotti senza registrarsi, oppure iscriversi e ricevere il 20% di sconto su tutti i prodotti.
// Il pagamento avviene con la carta di credito, che non deve essere scaduta.
// BONUS:
// Alcuni prodotti (es. antipulci) avranno la caratteristica che saranno disponibili solo in un periodo particolare (es. da maggio ad agosto).

//Richiamo le classi necessarie dalla cartella classes
require_once __DIR__ . '/classes/User.php';
require_once __DIR__ . '/classes/Product.php';
require_once __DIR__ . '/classes/Food.php';
require_once __DIR__ . '/classes/Accessories.php';

//Inizializzo un nuovo utente e un prodotto da comprare
$firstUser = new User("Homer", "Simpson");
$dogFood = new Food("Multifit", 23, "Cane", "MEDICA", "Pollo", 10);

//Applico le funzioni di verifica di registrazione, sconto e validazione pagamento
$firstUser->setRegistration(true);
$firstUser->setDiscount();
$firstUser->setCardValidation(2024);

$productDiscount = $dogFood->price * $firstUser->discount / 100;
$productPrice = $dogFood->price - $productDiscount;
echo("<p> Hai acquistato il prodotto a " . $productPrice . " euro!</p>");

var_dump($firstUser);
var_dump($dogFood);

/*

$catAccessory = new Accessories("Trixie", 7, "Gatto", "MEOW", "Ciotola", "Eat-on-Feet");

var_dump($dogFood);
var_dump($catAccessory);
*/

?>