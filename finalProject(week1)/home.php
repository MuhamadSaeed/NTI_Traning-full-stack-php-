<?php
$email = $_GET['email'] ?? '';
?>

<!DOCTYPE html>
<html lang="ar">
<head>
    <meta charset="UTF-8">
    <title>home</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
</head>
<body class="bg-light p-5">

<div class="container text-center">
    <div class="alert alert-success">
       heeeey <?= explode('@', $email)[0] ?>
    </div>

    <div class="m-auto">
        <a href="singup.php" class="btn btn-outline-primary">sing up page</a>
        <a href="create-pro.php?email=<?= $email ?>" class="btn btn-outline-primary">create products?</a>
        <a href="login.php" class="btn btn-outline-warning">login</a>
    </div>
</div>

</body>
</html>
