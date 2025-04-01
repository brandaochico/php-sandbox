<?php
  require('database.php');

  if($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['submit'])) {
    $name = htmlspecialchars($_POST['name']);
    $job = htmlspecialchars($_POST['job']);

    $sql = "INSERT INTO users (id, name, job) VALUES(nextval('id_sequence'), :name, :job)";

    $params = ['name' => $name, 'job' => $job];

    $stmt = $pdo->prepare($sql);
    $stmt->execute($params);

    header('Location: index.php');
    exit;
  }
?>


<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Create Blog Post</title>
  <script src="https://cdn.tailwindcss.com"></script>
</head>

<body class="bg-gray-100">
  <header class="bg-blue-500 text-white p-4">
    <div class="container mx-auto">
      <h1 class="text-3xl font-semibold">My Blog</h1>
    </div>
  </header>
  <div class="flex justify-center mt-10">
    <div class="bg-white p-8 rounded shadow-md w-full max-w-md">
      <h1 class="text-2xl font-semibold mb-6">Create New User</h1>
      <form method="post">
        <div class="mb-4">
          <label for="text" class="block text-gray-700 font-medium">Name</label>
          <input type="text" id="name" name="name" placeholder="Enter person's name" class="w-full px-4 py-2 border rounded focus:ring focus:ring-blue-300 focus:outline-none">
        </div>
        <div class="mb-6">
          <label for="job" class="block text-gray-700 font-medium">Job</label>
          <textarea id="job" name="job" placeholder="Enter person's job" class="w-full px-4 py-2 border rounded focus:ring focus:ring-blue-300 focus:outline-none"></textarea>
        </div>
        <div class="flex items-center justify-between">
          <button type="submit" name="submit" class="bg-blue-500 text-white px-4 py-2 rounded hover:bg-blue-600 focus:outline-none">
            Submit
          </button>
          <a href="index.php" class="text-blue-500 hover:underline">Back to Posts</a>
        </div>
      </form>
    </div>
  </div>
</body>

</html>