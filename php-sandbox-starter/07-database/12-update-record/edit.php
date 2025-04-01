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

  $isPutRequest = $_SERVER['REQUEST_METHOD'] === 'POST' && ($_POST['_method'] ?? '') === 'put';

  if($isPutRequest){
    $name = htmlspecialchars($_POST['name'] ?? '');
    $job = htmlspecialchars($_POST['job'] ?? '');

    $sql = "UPDATE users SET name = :name, job = :job WHERE id = :id";
    $params = [
      'name' => $name,
      'job' => $job,
      'id' => $id
    ];

    $stmt = $pdo->prepare($sql);
    $stmt->execute($params);
    $user = $stmt->fetch();

    var_dump($user);

    header('Location: index.php');
    exit;
  }
?>

<!DOCTYPE html>
 <html lang="en">
 
 <head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Update User Data</title>
   <script src="https://cdn.tailwindcss.com"></script>
 </head>
 
 <body class="bg-gray-100">
   <header class="bg-blue-500 text-white p-4">
     <div class="container mx-auto">
       <h1 class="text-3xl font-semibold">Users</h1>
     </div>
   </header>
   <div class="flex justify-center mt-10">
     <div class="bg-white p-8 rounded shadow-md w-full max-w-md">
       <h1 class="text-2xl font-semibold mb-6">Update User Data</h1>
       <form method="post">
          <input type="hidden" name="_method" value="put">
          <input type="hidden" name="id" value="<?= $user['id'] ?>">
         <div class="mb-4">
           <label for="title" class="block text-gray-700 font-medium">Name</label>
           <input type="text" id="name" name="name" placeholder="Enter user name" class="w-full px-4 py-2 border rounded focus:ring focus:ring-blue-300 focus:outline-none" value="<?= $user['name'] ?>">
         </div>
         <div class="mb-6">
           <label for="job" class="block text-gray-700 font-medium">Job</label>
           <textarea id="job" name="job" placeholder="Enter user job" class="w-full px-4 py-2 border rounded focus:ring focus:ring-blue-300 focus:outline-none"><?= $user['job'] ?></textarea>
         </div>
         <div class="flex items-center justify-between">
           <button type="submit" name="submit" class="bg-blue-500 text-white px-4 py-2 rounded hover:bg-blue-600 focus:outline-none">
             Submit
           </button>
           <a href="index.php" class="text-blue-500 hover:underline">Back to Users</a>
         </div>
       </form>
 
     </div>
   </div>
 </body>
 
 </html>