<?php require '../db.php'; ?>

<?php
$students = $conn->query("SELECT id, name FROM students");
$courses = $conn->query("SELECT id, title FROM course");

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $student_id = $_POST['student_id'];
    $course_id = $_POST['course_id'];
    $grade = $_POST['grade'];

    $stmt = $conn->prepare("INSERT INTO enrollments (std_id, course_id, grade) VALUES (?, ?, ?)");
    $stmt->bind_param("iii", $student_id, $course_id, $grade);
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
        <form method="POST">
            <div class="mb-3">
                <label>students</label>
                <select name="student_id" class="form-select" required>
                    <option value="">select student</option>

                        <?php while($s = $students->fetch_assoc()){ ?>
                            <option value="<?= $s['id'] ?>"> <?= $s['name'] ?> </option>
                        <?php }; ?>

                </select>
            </div>

            <div class="mb-3">
                <label>Course</label>
                <select name="course_id" class="form-select" required>
                    <option value="">select course</option>

                        <?php while($c = $courses->fetch_assoc()){ ?>
                            <option value="<?= $c['id'] ?>"> <?= $c['title'] ?> </option>
                        <?php }; ?>

                </select>
            </div>

            <div class="mb-3">
                <label>grade</label>
                <input type="number" name="grade" class="form-control">
            </div>

            <button class="btn btn-primary">add</button>
        </form>
    </div>
</body>
</html>
