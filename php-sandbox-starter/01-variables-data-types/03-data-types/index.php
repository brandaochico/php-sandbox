<?php

/*
  PHP DATA TYPES:

- String
- Integer
- Float
- Boolean
- Array
- Object
- NULL
- Resource
*/

$name = 'Chico';
$surname = "Brandao";

var_dump($name);

echo '<br />';
echo getType($surname);

echo '<br />';
$friends = ['Chico', 'Rodrigo', 'Marcelo'];
var_dump($friends);

echo '<br />';
$person = new stdClass();
var_dump($person);

echo '<br />';
$file = fopen('sample.txt', 'r');
var_dump($file);
