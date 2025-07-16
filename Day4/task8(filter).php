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
            "mohamed" => 6000,
            "ali" => 2000,
            "khaled" => 7000
        ];

        $fltered = array_filter($products, function($val) {return $val > 5000;});
    ?>
    <div class="container">
        <div class="row mt-5">
            <ul class="list-group">
                <?php 
                    foreach($fltered as $key => $value) {
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
        <div class="row mt-5">
            <table class="table">
                <thead>
                    <tr>
                    <th class="bg-dark text-white border-1" scope="col">name</th>
                    <th class="bg-dark text-white border-1" scope="col">salary</th>
                    </tr>
                </thead>
                <tbody>
                    <?php 
                        foreach($fltered as $key => $value) {
                    ?>
                        <tr>
                        <td><?= $key ?></td>
                        <td><?= $value ?></td>
                        </tr>
                    <?php
                        }
                    ?>
                </tbody>
            </table>
        </div>
    </div>

    <script src="js/bootstrap.bundle.js"></script>
</body>
</html>
