<?php require '../db.php'; ?>

<?php
$id = $_GET['id'] ?? 0;

$stmt = $conn->prepare("SELECT * FROM enrollments WHERE id = ?");
$stmt->bind_param("i", $id);
$stmt->execute();
$enrollment = $stmt->get_result()->fetch_assoc();

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $student_id = $_POST['student_id'];
    $course_id = $_POST['course_id'];
    $grade = $_POST['grade'];

    $stmt = $conn->prepare("UPDATE enrollments SET std_id = ?, course_id = ?, grade = ? WHERE id = ?");
    $stmt->bind_param("iiii", $student_id, $course_id, $grade, $id);
    $stmt->execute();

    header("Location: select.php");
    exit();
}


$students = $conn->query("SELECT id, name FROM students");
$courses = $conn->query("SELECT id, title FROM course");
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
        <h2 class="mb-4">update</h2>
        <form method="POST">
            <div class="mb-3">
                <label>student</label>
                <select name="student_id" class="form-select" required>

                    <?php while($s = $students->fetch_assoc()){ ?>
                        <option value="<?= $s['id'] ?>" >
                            <?= $s['name'] ?>
                        </option>
                    <?php }; ?>

                </select>
            </div>

            <div class="mb-3">
                <label>course</label>
                <select name="course_id" class="form-select" required>
                    
                    <?php while($c = $courses->fetch_assoc()){ ?>
                        <option value="<?= $c['id'] ?>" >
                            <?= $c['title'] ?>
                        </option>
                    <?php }; ?>

                </select>
            </div>

            <div class="mb-3">
                <label>grade</label>
                <input type="number" name="grade" class="form-control" >
            </div>

            <button class="btn btn-primary">update</button>
        </form>
    </div>
</body>
</html>
