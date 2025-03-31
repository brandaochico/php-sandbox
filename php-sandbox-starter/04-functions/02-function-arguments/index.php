<?php

function add($a = 1, $b = 1) {
    return $a + $b;
}

echo add(1, 2);
echo '<br>'; 
echo add();
echo '<br>'; 

function addAll(...$numbers) {
    $total = 0;

    foreach($numbers as $number) {
        $total += $number;
    }

    return $total;
}

echo addAll(1,2,3,4,5,6,7);