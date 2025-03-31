<?php

function applyCallback($callback, $value) {
    return $callback($value);
}

$double = function ($value) {
    return $value * 2;
};

echo applyCallback($double, 5);