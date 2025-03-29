<?php
$output = null;

$array = [1,2,3,4,5];

$output = $array[1]; 

array_push($array, 6);

array_pop($array);

array_shift($array);

array_unshift($array, 50);

$output = 'Array Sum: ' . array_sum($array);
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
            </p>
            <p>
                <pre>
                    <?php print_r($array) ?>
                </pre>
            </p>
        </div>
    </div>
</body>

</html>