<?php
/*
  Challenge 1: Fahrenheit to Celsius
  Create a function called `fahrenheitToCelsius` that takes a Fahrenheit temperature as an argument. Return the temperature converted to Celsius.

  The formula to convert Fahrenheit to Celsius is: Celsius = (Fahrenheit - 32) * 5/9
*/

echo '<h2>Fahrenheit to Celsius</h2>';

define('F_CONST', 32);
// Easy
function fahrenheitToCelsius($temp) {
  return $temp . '°F = ' . number_format((($temp - F_CONST) * 5/9), 2) . '°C';
} 

echo 'Easier: ' . fahrenheitToCelsius(69);

echo '<br>';
// Harder
$conversion = fn ($temp) => $temp . '°F = ' . number_format((($temp - F_CONST) * 5/9), 2) . '°C';

echo 'Harder: ' . $conversion(69);

echo '<br>';

/*
  Challenge 2: Print names in uppercase
  Create a function called `printNamesToUpperCase` that takes an array of names as an argument. The function should loop through the array and print each name to the screen in uppercase letters.
*/

echo '<h2>Names to Uppercase</h2>';

$names = ['Chico', 'Julia', 'Josias', 'Marcelo', 'Leandro', 'Roberta'];

function printNamestoUpperCase($names) {
  foreach($names as $name) {
    echo strtoupper($name) . '<br>';
  }
}

echo printNamestoUpperCase($names);

echo '<br>';

/*
  Challenge 3: Find the longest word
  1. Create a function called `findLongestWord` that takes a sentence as an argument.
  2. The function should return the longest word in the sentence.
  3. The output should look like this:
*/

echo '<h2>Longest word in sentence</h2>';

$sentence = "My name is Chico and I like to code! I'm currently learning PHP, which translates to Hypertext Processor!";

function findLongestWord($sentence) {
  $longestWord = '';
  $words = explode(' ', $sentence);
  foreach($words as $word) {
    if(strlen($word) > strlen($longestWord)) {
      $longestWord = $word;
    }
  }

  return $longestWord;
}

echo 'The longest word in the sentence is: ' . findLongestWord($sentence);