<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="css/bootstrap.min.css" />
    <title>Document</title>
  </head>
<body class="bg-black text-white">
    <?php 
        $products = [
            "html" => 100,
            "css" => 200,
            "js" => 300
        ];

        asort($products); 

        //print_r($products);
    ?>
    <div class="container">
        <div class="row mt-5">
            <ul class="list-group">
                <?php 
                    foreach($products as $key => $value) {
                ?>
                    <li class="list-group-item d-flex justify-content-between bg-dark text-white">  
                        <span><?= $key ?></span>
                        <span class="badge bg-primary rounded-pill"><?= $value ?></span>
                    </li>
                <?php
                    }
                ?>
            </ul>
        </div>
    </div>

    <script src="js/bootstrap.bundle.js"></script>
</body>
</html>
