<?php require '../db.php'; ?>

<?php
$id = $_GET['id'] ?? 0;

$stmt = $conn->prepare("SELECT * FROM students WHERE id = ?");

$stmt->bind_param("i", $id);
$stmt->execute();

$student = $stmt->get_result()->fetch_assoc();

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $name = $_POST['name'] ?? '';
    $email = $_POST['email'] ?? '';
    $phone = $_POST['phone'] ?? '';
    $date = $_POST['date'] ?? '';

    $stmt = $conn->prepare("UPDATE students SET name=?, email=?, phone=?, date=? WHERE id=?");
    $stmt->bind_param("ssssi", $name, $email, $phone, $date, $id);
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
        <h2 class="mb-4">edit students</h2>
        <form method="post">
            <div class="mb-2">
                <label>name</label>
                <input name="name" class="form-control" value="<?= $student['name'] ?>" required>
            </div>
            <div class="mb-2">
                <label>mail</label>
                <input name="email" type="email" class="form-control" value="<?= $student['email'] ?>">
            </div>
            <div class="mb-2">
                <label>phone</label>
                <input name="phone" class="form-control" value="<?= $student['phone'] ?>">
            </div>
            <div class="mb-2">
                <label>Date</label>
                <input name="date" type="date" class="form-control" value="<?= $student['date'] ?>">
            </div>
            <button class="btn btn-primary">update</button>
        </form>
    </div>
</body>
</html>
