<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_FILES['image'])) {
    $folder = 'imgs/' . date('Y-m-d') . '/';
    if (!file_exists($folder)) {
        mkdir($folder, 0777, true);
    }

    $fileName = basename($_FILES['image']['name']);
    $ext = strtolower(pathinfo($fileName, PATHINFO_EXTENSION));
    $new_name = uniqid('img_', true) . '.' . $ext;
    $target = $folder . $new_name;

    $allowed_types = ['image/jpeg', 'image/png', 'image/jpg'];
    $allowed_extensions = ['jpeg', 'jpg', 'png'];

    if (in_array($_FILES['image']['type'], $allowed_types) && in_array($ext, $allowed_extensions)) {
        
        if (move_uploaded_file($_FILES['image']['tmp_name'], $target)) {
            echo "uploaded";
        } else {
            echo "error";
        }
    }
}

?>


<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="css/style.css" />
    <link rel="stylesheet" href="css/bootstrap.min.css" />
    <!-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet"> -->

    <title>Document</title>
  </head>
  <body style="background: #9fc69f">
        <div class="container">
            <div class="row">
                <form class="input-group flex-nowrap " method="post" enctype="multipart/form-data" >
                    <button type="submit" class="input-group-text" id="addon-wrapping">submit</button>
                    <input type="file" name="image" class="form-control"  aria-label="Username" aria-describedby="addon-wrapping">
                </form>
            </div>
        </div>
    <script src="js/bootstrap.bundle.js"></script>
  </body>
</html>
