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
        <h2 class="mb-4">all students</h2>
        <a href="add.php" class="btn btn-success mb-3">add std</a>
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>id</th>
                    <th>name</th>
                    <th>email</th>
                    <th>pgone</th>
                    <th>date</th>
                    <th>delte&update</th>
                </tr>
            </thead>
            <tbody>
                <?php
                    $result = $conn->query("SELECT * FROM students");
                    while($row = $result->fetch_assoc()) {
                ?>
                <tr>
                    <td><?= $row['id'] ?></td>
                    <td><?= $row['name'] ?></td>
                    <td><?= $row['email'] ?></td>
                    <td><?= $row['phone'] ?></td>
                    <td><?= $row['date'] ?></td>
                    <td>
                        <a href="update.php?id=<?= $row['id'] ?>" class="btn btn-warning">update</a>
                        <a href="delete.php?id=<?= $row['id'] ?>" class="btn btn-danger" >delete</a>
                    </td>
                </tr>
                <?php }; ?>
            </tbody>
        </table>
    </div>
</body>
</html>
