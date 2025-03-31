<?php

function createCounter() {
    $count = 0;

    $counter = function() use (&$count) {
        return ++$count;
    };

    return $counter;
}

$counter = createCounter();

echo $counter();