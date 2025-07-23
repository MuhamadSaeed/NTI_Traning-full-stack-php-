<?php
require "db.php";
session_start();
if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $email = $_POST['email'] ?? '';
    $password = $_POST['password'] ?? '';

    $stmt = $conn->prepare("SELECT * FROM users WHERE email = ?");
    $stmt->bind_param("s", $email);
    $stmt->execute();

    $result = $stmt->get_result();
    if ($result->num_rows === 1) {
        $user = $result->fetch_assoc();
        if (password_verify($password, $user['password'])) {
            $_SESSION['email'] = $email;
            header("Location: home.php?email=$email");
        } else {
            $error = "pass is not true";
        }
    } else {
        $error = "email is not even exist";
    }
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

    
</div>

</body>
</html>
