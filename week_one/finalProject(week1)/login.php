<?php

$users = [
    ['email' => 'ahmed@gmail.com', 'password' => '009854'],
    ['email' => 'khaled@gmail.com', 'password' => '215628'],
];

$email = $_POST['email'] ?? '';
$password = $_POST['password'] ?? '';

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    foreach ($users as $user) {
        if ($email === $user['email'] && $password === $user['password']) {
            header("Location: home.php?email=$email");
            exit;
        }
    }
    $error = "something went wrong...";
}
?>

<!DOCTYPE html>
<html lang="ar">
<head>
    <meta charset="UTF-8">
    <title>login pagee</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
</head>
<body class="bg-light p-5">

<div class="container">
    <h2 class="mb-4"> login</h2>

    <?= isset($error) && $error !== '' ? "<div class='alert alert-danger'>$error</div>" : '' ?>


    <form method="post" class="mb-4">
        <div class="mb-3">
            <label class="form-label">email :</label>
            <input type="email" name="email" class="form-control" required >
        </div>

        <div class="mb-3">
            <label class="form-label">password</label>
            <input type="password" name="password" class="form-control" required>
        </div>

        <button type="submit" class="btn btn-primary">logiin </button>
    </form>

    <ul class="list-group">
        <?php foreach ($users as $user) { ?>
            <li class="list-group-item d-flex justify-content-between">
                <span><?= $user['email'] ?></span>
                <span><?= $user['password'] ?></span>
            </li>
        <?php }  ?>
    </ul>
</div>

</body>
</html>
