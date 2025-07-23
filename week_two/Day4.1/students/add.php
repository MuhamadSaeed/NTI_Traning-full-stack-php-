<?php require '../db.php'; ?>

<?php

session_start();

if ($_SESSION['role'] == 0){ 
    header("Location: select.php");
    exit();
}


if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $name = $_POST['name'] ?? '';
    $email = $_POST['email'] ?? '';
    $phone = $_POST['phone'] ?? '';
    $dob = $_POST['date'] ?? '';

    $stmt = $conn->prepare("INSERT INTO students (name, email, phone, date) VALUES (?, ?, ?, ?)");
    $stmt->bind_param("ssss", $name, $email, $phone, $dob);
    $stmt->execute();
    
    
    header("Location: select.php");
    exit();
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>document</title>
    <link href="../css/bootstrap.min.css" rel="stylesheet">
</head>
<body >
<?php require '../navbar.html'; ?>

    <div class="container">
        <h2 class="mb-4">add student</h2>
        <form method="post">
            <div class="mb-2">
                <label>name</label>
                <input name="name" class="form-control" required>
            </div>
            <div class="mb-2">
                <label>email</label>
                <input name="email" type="email" class="form-control" required>
            </div>
            <div class="mb-2">
                <label>phone</label>
                <input name="phone" class="form-control" required>
            </div>
            <div class="mb-2">
                <label>date</label>
                <input name="date" type="date" class="form-control" required>
            </div>
            <button class="btn btn-primary">add</button>
        </form>
    </div>
</body>
</html>
