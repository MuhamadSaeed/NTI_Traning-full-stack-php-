<?php require '../db.php'; ?>

<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $title = $_POST['title'] ?? '';
    $desc = $_POST['description'] ?? '';
    $price = $_POST['price'] ?? '';
    $hours = $_POST['hours'] ?? '';

    $stmt = $conn->prepare("INSERT INTO course (title, description, price, hours) VALUES (?, ?, ?, ?)");
    $stmt->bind_param("ssss", $title, $desc, $price, $hours);
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
<body class="">
<?php require '../navbar.html'; ?>

    <div class="container">
        <h2 class="mb-4">add course</h2>
        <form method="post">
            <div class="mb-2">
                <label>ttile</label>
                <input name="title" class="form-control" required>
            </div>
            <div class="mb-2">
                <label>description</label>
                <input name="description" class="form-control" required>
            </div>
            <div class="mb-2">
                <label>price</label>
                <input name="price" type="number" class="form-control" required>
            </div>
            <div class="mb-2">
                <label>hours</label>
                <input name="hours" type="number" class="form-control" required>
            </div>
            <button class="btn btn-primary">add</button>
        </form>
    </div>
</body>
</html>
