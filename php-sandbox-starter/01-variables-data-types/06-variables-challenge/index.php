<?php

$title = "Introduction to PHP";
$pageTitle = "Brad's PHP Blog | Introduction to PHP Blog | " . $title;
$author = "John Doe";
$body = "PHP (Hypertext Preprocessor) is a widely used server-side scripting
      language that has revolutionized web development. With its simplicity,
      flexibility, and vast community support, PHP has become the backbone of
      countless dynamic websites and web applications.";
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title><?= $pageTitle ?></title>
</head>

<body>
  <main>
    <h1><?= $title ?></h1>
    <p><?= 'Author: ' . $author ?></p>
    <p>
      <?= $body ?>
    </p>
  </main>
</body>

</html>