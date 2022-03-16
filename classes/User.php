<?php
class User {

    public $name;
    public $lastName;
    public $registration = false;
    public $discount = 0;
    public $creditCardValidation = false;
    
    //Costruttore
    public function __construct($_name, $_lastName) {
        $this->name = $_name;
        $this->lastName = $_lastName;
    }

    //Funzione di verifica di registrazione al sito
    public function setRegistration($_input) {
        if ($_input == true) {
            return $this->registration = true;
        } else {
            echo ('<p>Non sei registrato</p>');
        }
    }

    //Funzione di verifica di diritto allo sconto
    public function setDiscount() {
        if ($this->registration == true) {
            $this->discount = 20;
            echo ("<p>Hai diritto al 20% di sconto su tutti i prodotti!</p>");
        } else {
            echo ("<p>Registrati al nostro sito per avere diritto al 20% di sconto su tutti i prodotti!</p>");
        }
    }

    //Funzione di verifica validità carta di credito
    public function setCardValidation($_year) {
        if ($_year < 2022) {
            echo("<p>La tua carta di credito è stata accettata.</p>");
            return $this->creditCardValidation = true;
        } else {
            echo("<p>La tua carta di credito è scaduta e non valida.</p>");
        }
    }
}


?>