<?php
$email = $_GET['email'] ?? "";
$productName = $_POST['pro_name'] ?? '';
$desc = $_POST['desc'] ?? '';

$products = [];

if ($_SERVER["REQUEST_METHOD"] === "POST" && isset($_FILES['images'])) {
    $images = $_FILES['images'];
    $count = count($images['name']);

    for ($i = 0; $i < $count; $i++) {
        if ($images['error'][$i] === 0) {
            $fileName = $images['name'][$i];
            $tmpName = $images['tmp_name'][$i];
            $target = 'images/' . $fileName;
            move_uploaded_file($tmpName, $target);

            $products[] = [
                'name' => $productName,
                'desc' => $desc,
                'image' => $target,
                'email' => $email
            ];
        }
    }
}
?>

<!DOCTYPE html>
<html lang="ar">
<head>
    <meta charset="UTF-8">
    <title>create products</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
</head>
<body class="bg-light p-5">

<div class="container">
    <h2 class="mb-4">create a prodcut </h2>

    <form method="POST" enctype="multipart/form-data" class="mb-5">
        <div class="mb-3">
            <label class="form-label">name :</label>
            <input type="text" name="pro_name" class="form-control" required>
        </div>

        <div class="mb-3">
            <label class="form-label">desc:</label>
            <textarea name="desc" class="form-control" rows="3" required></textarea>
        </div>

        <div class="mb-3">
            <label class="form-label">image(s):</label>
            <input type="file" name="images[]" class="form-control" multiple required>
        </div>

        <button type="submit" class="btn btn-success"> create</button>
    </form>

    <?php if (!empty($products)) { ?>
        <h3 class="mb-3"> prodcuts:</h3>
        <div class="row">
            <?php foreach ($products as $product) { ?>
                <div class="col-md-4 mb-4">
                    <div class="card h-100">
                        <img src="<?= $product['image'] ?>" class="card-img-top" >
                        <div class="card-body">
                            <h5 class="card-title"><?= htmlspecialchars($product['name']) ?></h5>
                            <p class="card-text"><?= htmlspecialchars($product['desc']) ?></p>
                        </div>
                        <div class="card-footer text-muted">
                            created by <?= htmlspecialchars($product['email']) ?>
                        </div>
                    </div>
                </div>
            <?php } ?>
        </div>
    <?php } ?>
</div>

</body>
</html>
