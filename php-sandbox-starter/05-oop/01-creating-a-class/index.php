<?php

class User {
    public $name;
    public $email;

    public function __construct($name, $email) {
        $this -> name = $name;
        $this -> email = $email;
    }

    public function login() {
        echo 'Logged in!';
    }
}

$user1 = new User('Chico', 'chico@gmail.com');

echo $user1 -> login();