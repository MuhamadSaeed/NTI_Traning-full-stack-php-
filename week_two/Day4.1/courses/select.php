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
        <h2 class="mb-4">all courses</h2>
        <a href="add.php" class="btn btn-success mb-3">add course</a>
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>id</th>
                    <th>title</th>
                    <th>description</th>
                    <th>price</th>
                    <th>hours</th>
                    <th>delte&update</th>
                </tr>
            </thead>
            <tbody>
                <?php
                    $result = $conn->query("SELECT * FROM course");
                    while($row = $result->fetch_assoc()) {
                ?>
                <tr>
                    <td><?= $row['id'] ?></td>
                    <td><?= $row['title'] ?></td>
                    <td><?= $row['description'] ?></td>
                    <td><?= $row['price'] ?></td>
                    <td><?= $row['hours'] ?></td>
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
