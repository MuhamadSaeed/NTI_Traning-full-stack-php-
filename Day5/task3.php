<?php
if($_SERVER['REQUEST_METHOD'] === "POST" && isset($_FILES['image'])) {
    echo ($_POST['username']);
    echo "<br>";

    $imgName = $_FILES['image']['name'];
    $imgTMP = $_FILES['image']['tmp_name'];
    
    move_uploaded_file($imgTMP, "imgs/$imgName");

    $file_name = $_FILES['file']['name'];
    $fileTMP = $_FILES['file']['tmp_name'];
    
    move_uploaded_file($fileTMP, "files/$file_name");
}
?>

<form action="" method="post" enctype="multipart/form-data">
    <input type="text" name="username">
    <input type="file" name="image">
    <input type="file" name="file">
    <button>upload</button>
</form>
