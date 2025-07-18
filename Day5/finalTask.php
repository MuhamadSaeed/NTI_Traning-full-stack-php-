<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_FILES['image'])) {

    echo "<span>name: </span>" . htmlspecialchars($_POST['username']);

    $name = $_FILES['image']['name'];
    $extin = strtolower(pathinfo($name, PATHINFO_EXTENSION));
    $type = explode('/', $_FILES['image']['type'])[0];
    $allowed = ['png', 'jpg', 'jpeg'];
    $tmp = $_FILES['image']['tmp_name'];

    if (!in_array($extin, $allowed)) {
        echo "<div style='color:red;'>error: the file extension .$extin is not allowed</div>";
    } elseif ($type != "image") {
        echo "<div style='color:red;'>err: the uploaded file is not an image</div>";
    } elseif ($_FILES['image']['size'] >= 3 * 1024 * 1024) {
        echo "<div style='color:red;'>err: the image size exceeds 3MB</div>";
    } else {
        move_uploaded_file($tmp, "imgs/" . $name);
        echo "<img src='imgs/$name' class='img-thumbnail m-3' width='200'>";
    }
    }
?>

<form method="post" enctype="multipart/form-data" class="p-3">
    <input type="text" name="username" class="form-control mb-2" required>
    <input type="file" name="image" class="form-control mb-2" required>
    <button class="btn btn-primary">upload</button>
</form>
