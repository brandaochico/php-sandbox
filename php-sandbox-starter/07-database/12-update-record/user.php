<?php
  require('database.php');

  $id = $_GET['id'] ?? null;

  if(!$id) {
    header('Location: index.php');
    exit();
  }

  $sql = 'SELECT * FROM users WHERE id = :id';
  $stmt = $pdo->prepare($sql);
  $params = ['id' => $id];
  $stmt->execute($params);
  $user = $stmt->fetch();
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <script src="https://cdn.tailwindcss.com"></script>
  <title><?= $user['name'] ?></title>
</head>

<body class="bg-gray-100">
  <header class="bg-blue-500 text-white p-4">
    <div class="container mx-auto">
      <h1 class="text-3xl font-semibold">Users</h1>
    </div>
  </header>
  <div class="container mx-auto p-4 mt-4">
    <div class="md my-4">
      <div class="rounded-lg shadow-md mb-4">
        <div class="p-4">
          <h2 class="text-xl font-semibold"><?= $user['name'] ?></h2>
          <p class="text-gray-700 text-lg mt-2 mb-5"><?= $user['job'] ?></p>
          <a href="index.php">Go Back</a>
        </div>
      </div>

      <!-- Edit -->
      <a href="edit.php?id=<?= $user['id'] ?>" class="bg-green-500 text-white px-4 py-2 rounded hover:bg-green-600 focus:outline-none block w-full text-center mb-4">Edit User</a>

      <!--- Delete -->
      <form action="delete.php" method="post">
        <input type="hidden" name="_method" value="delete">
        <input type="hidden" name="id" value="<?= $user['id'] ?>">
        <button class="bg-red-500 text-white px-4 py-2 hover:bg-red-600 rounded focus:outline-none w-full">
          Delete User 
        </button>
      </form>
    </div>
  </div>
</body>

</html>