<?php
$name = $_POST['name'] ?? '';
$email = $_POST['email'] ?? '';
$password = $_POST['password'] ?? '';



$created = false;

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    if (!empty($_FILES['pic']['name'])) {
        $fileName = $_FILES['pic']['name'];
        $fileTmp = $_FILES['pic']['tmp_name'];
        $target = 'images/' . $fileName;
        move_uploaded_file($fileTmp, $target);
        $picPath = $target;
    }

    $created = true;
}
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>sing up </title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
</head>
<body class="bg-light p-5">

<div class="container">
    <h2 class="mb-4">create a new account> </h2>

    <?php if (!$created) { ?>
        <form method="POST" enctype="multipart/form-data" class="mb-5">
            <div class="mb-3">
                <label class="form-label">name:</label>
                <input type="text" name="name" class="form-control" required>
            </div>

            <div class="mb-3">
                <label class="form-label">email:</label>
                <input type="email" name="email" class="form-control" required>
            </div>

            <div class="mb-3">
                <label class="form-label">password:</label>
                <input type="password" name="password" class="form-control" required>
            </div>

            <div class="mb-3">
                <label class="form-label">picture:</label>
                <input type="file" name="pic" class="form-control" required>
            </div>

            <button type="submit" class="btn btn-success">create the account</button>
        </form>
    <?php } else{ ?>
        <div class="card mb-4" style="max-width: 400px;">
            <img src="<?= $picPath ?>" class="card-img-top">
            <div class="card-body">
                <h5 class="card-title"><?= htmlspecialchars($name) ?></h5>
                <p class="card-text"><?= htmlspecialchars($email) ?></p>
            </div>
        </div>

        <a href="create-pro.php?email=<?= $email ?>" class="btn btn-primary">create products?</a>
    <?php } ?>
</div>

</body>
</html>
