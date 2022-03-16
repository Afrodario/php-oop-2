<?php
require_once __DIR__ . '/User.php';

class RegisteredUser extends User {

    public $email;
    public $creditCard;

    public function __construct($_name, $_lastName, $_email, $_creditCard = 'default') {

        parent::__construct($_name, $_lastName);

        $this->email = $_email;
        $this->creditCard = $_creditCard;
    }

}


?>