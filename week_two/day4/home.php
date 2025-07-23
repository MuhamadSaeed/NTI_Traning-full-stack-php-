<?php
$email = $_GET['email'] ?? '';

session_start();
if (!isset($_SESSION['email'])) {
    header("Location: login.php");
}

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
       heeeey 
    </div>

    <div class="m-auto">
        <a href="singup.php" class="btn btn-outline-primary">sing up page</a>
        <a href="create-pro.php?email=<?= $email ?>" class="btn btn-outline-primary">create products?</a>
        <a href="logout.php" class="btn btn-outline-warning">logout</a>
    </div>
</div>

</body>
</html>
