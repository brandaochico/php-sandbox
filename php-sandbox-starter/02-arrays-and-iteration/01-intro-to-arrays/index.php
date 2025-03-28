<?php

$array = ['Maçã', 'Banana', 'Laranja'];

function inspect($value)
{
    echo '<pre>';
    var_dump($value);
    echo '<pre>';
}

inspect($array);
print_r($array);
