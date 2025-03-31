<?php

$dow = date('l');

switch($dow) {
  case 'Monday':
    $text = 'Monday Blues!';
    $color = 'blue';
    break;
  case 'Tuesday':
    $text = 'Tuesday Greens!';
    $color = 'green';
    break;
  case 'Wednesday':
    $text = 'Wednesday Yellows!';
    $color = 'yellow';
    break;
  case 'Thursday':
    $text = 'Thursday Reds!';
    $color = 'reds';
    break;
  case 'Friday':
    $text = 'Friday Orange!';
    $color = 'orange';
    break;
  case 'Saturday':
    $text = 'Satuday Pinks!';
    $color = 'pink';
    break;
  case 'Sunday':
    $text = 'Sunday Purples!';
    $color = 'purple';
    break;
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>What Day Is It?</title>
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Roboto&display=swap" rel="stylesheet">
  <style>
    body {
      font-family: 'Roboto', sans-serif;
      background-color: <?= $color ?>;
      color: white;
      display: flex;
      justify-content: center;
      align-items: center;
      height: 100vh;
    }
  </style>
</head>

<body>
  <h1><?= $text ?><h1>
</body>

</html>