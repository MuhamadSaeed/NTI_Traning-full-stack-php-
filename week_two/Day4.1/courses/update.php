<?php require '../db.php'; ?>

<?php
$id = $_GET['id'] ?? 0;

$stmt = $conn->prepare("SELECT * FROM course WHERE id = ?");

$stmt->bind_param("i", $id);
$stmt->execute();

$course = $stmt->get_result()->fetch_assoc();

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $title = $_POST['title'] ?? '';
    $description = $_POST['description'] ?? '';
    $price = $_POST['price'] ?? '';
    $hours = $_POST['hours'] ?? '';

    $stmt = $conn->prepare("UPDATE course SET title=?, description=?, price=?, hours=? WHERE id=?");
    $stmt->bind_param("ssssi", $title, $description, $price, $hours, $id);
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
<body>
<?php require '../navbar.html'; ?>

    <div class="container">
        <h2 class="mb-4">edit course</h2>
        <form method="post">
            <div class="mb-2">
                <label>title</label>
                <input name="title" class="form-control" value="<?= $course['title'] ?>" required>
            </div>
            <div class="mb-2">
                <label>description</label>
                <input name="description" type="text" class="form-control" value="<?= $course['description'] ?>">
            </div>
            <div class="mb-2">
                <label>price</label>
                <input name="price" type="number" class="form-control" value="<?= $course['price'] ?>">
            </div>
            <div class="mb-2">
                <label>hours</label>
                <input name="hours" type="number" class="form-control" value="<?= $course['hours'] ?>">
            </div>
            <button class="btn btn-primary">update</button>
        </form>
    </div>
</body>
</html>
