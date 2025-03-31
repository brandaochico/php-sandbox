<?php

$x = 5;

// If statement
if($x == 5) {
    echo 'X is equal to 5! <br />';
}

// If-Else
if($x == 6) {
    echo 'X is equal to 6! <br />';
} else {
    echo 'X is not equal to 6!<br />';
}

// Nested if statement
if($x == 5) {
    if($x >= 1){
        echo 'X is equal to 5 and grater than 1! <br />';
    }
}