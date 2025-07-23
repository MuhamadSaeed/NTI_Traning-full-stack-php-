<?php require '../db.php'; ?>

<!DOCTYPE html>
<html>
<head>
    <title>document</title>
    <link href="../css/bootstrap.min.css" rel="stylesheet">
</head>
<body >
<?php require '../navbar.html'; ?>
    <div class="container">
        <h2 class="mb-4">enrollments</h2>
        <a href="add.php" class="btn btn-success mb-3">add</a>
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>student</th>
                    <th>course</th>
                    <th>grade</th>
                    <th>date</th>
                    <th>delete&update</th>
                </tr>
            </thead>
            <tbody>
                <?php
                    $result = $conn->query("SELECT enrollments.id,  students.name,  course.title,  enrollments.grade,  enrollments.enrolment_date FROM enrollments JOIN students ON enrollments.std_id = students.id JOIN course ON enrollments.course_id = course.id");
                    while($row = $result->fetch_assoc()) {
                ?>
                    <tr>
                        <td><?= $row['name'] ?></td> 
                        <td><?= $row['title'] ?></td> 
                        <td><?= $row['grade'] ?></td>
                        <td><?= $row['enrolment_date'] ?></td>
                        <td>
                            <a href="update.php?id=<?= $row['id'] ?>" class="btn btn-warning ">update</a>
                            <a href="delete.php?id=<?= $row['id'] ?>" class="btn btn-danger">delete</a>
                        </td>
                    </tr>
                <?php }; ?>
            </tbody>
        </table>
    </div>
</body>
</html>
