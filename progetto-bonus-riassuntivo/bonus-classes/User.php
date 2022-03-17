<?php

class User {

    public $name;
    public $lastName;
    protected $email;
    protected $creditCard;

    public function __construct($_name, $_lastName) {
        $this->name = $_name;
        $this->lastName = $_lastName;
    }

    public function setEmail($_value) {
        if (is_string($_value) && strpos($_value, '@') && strpos($_value, '.')) {
            $this->email = $_value;
        } else {
            throw new Exception("L'e-mail inserita non è valida!");
        }
    }

}



?>