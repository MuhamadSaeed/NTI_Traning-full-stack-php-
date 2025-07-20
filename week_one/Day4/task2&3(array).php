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
            ["name" => "productName", "price" => "productPrice", "q" => "productQuantity"],
            ["name" => "productName", "price" => "productPrice", "q" => "productQuantity"],
            ["name" => "productName", "price" => "productPrice", "q" => "productQuantity"]
        ]
    ?>
    <div class="container">
        <div class="row">
            <table class="table">
            <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Name</th>
                    <th scope="col">Price</th>
                    <th scope="col">Quantity</th>
                </tr>
            </thead>
            <tbody>
                <?php
                    for($i = 0; $i < 3; $i++) { ?>
                        <tr>
                            <th scope="row"><?= $i ?></th>
                            <td><?= $products[$i]["name"] ?></td>
                            <td><?= $products[$i]["price"] ?></td>
                            <td><?= $products[$i]["q"] ?></td>
                        </tr>
                   <?php 
                }
                ?>
                
            </tbody>
            </table>

                <!-- task 3 (have an error) -->

            <ul class="list-group">
                <?php 
                    $data = ["name" => "mohamed", "title" => "developer", "desc" => "bla bla bla"]
                    for($i = 0; $i < 3; $i++) {
                ?>
                    <li class="list-group-item"><?= $data[0][$i] ?></li>
                <?php
                    }
                ?>
            </ul>
        </div>

    </div>

    <script src="js/bootstrap.bundle.js"></script>
</body>
</html>
