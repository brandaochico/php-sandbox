<?php

class User {
  public $name;
  public $email;
  protected $status = 'active';

  public function __construct($name, $email)
  {
    $this->name = $name;
    $this->email = $email;
  }

  public function login()
  {
    echo $this->name . ' logged in <br>';
  }
}

class Admin extends User {
  public $level;

  public function __construct($name, $email, $level) {
    $this -> level = $level;
    parent::__construct($name, $email);
  }
}

$admin1 = new Admin('Chico Brandão', 'chico@admin.com', '5');

$admin1 -> login();