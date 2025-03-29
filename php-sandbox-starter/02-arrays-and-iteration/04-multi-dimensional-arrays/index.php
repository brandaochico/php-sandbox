<?php
$output = null;

$fruits = [
  ['Apple', 'Red'],
  ['Orange', 'Orange'],
  ['Banana', 'Yellow']
];

$output = 'Color of ' . $fruits[0][0] . ': ' . $fruits[0][1];

$users = [
  ['name' => 'Chico', 'email' => 'chico@gmail.com', 'password' => '123456'],
  ['name' => 'João', 'email' => 'joao@gmail.com', 'password' => '123456'],
  ['name' => 'Julia', 'email' => 'julia@gmail.com', 'password' => '123456'],
]
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <script src="https://cdn.tailwindcss.com"></script>
  <title>PHP From Scratch</title>
</head>

<body class="bg-gray-100">
  <header class="bg-blue-500 text-white p-4">
    <div class="container mx-auto">
      <h1 class="text-3xl font-semibold">PHP From Scratch</h1>
    </div>
  </header>
  <div class="container mx-auto p-4 mt-4">
    <div class="bg-white rounded-lg shadow-md p-6 mt-6">
      <!-- Output -->
      <p class="text-xl"><?= $output ?></p>
        <p>
          <pre>
              <?php print_r($users) ?>
          </pre>
        </p>
    </div>
  </div>
</body>

</html>