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
            ["name" => "productName", "price" => "1000", "q" => "productQuantity"],
            ["name" => "productName", "price" => "2000", "q" => "productQuantity"],
            ["name" => "productName", "price" => "3000", "q" => "productQuantity"]
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
                    for($i = 0; $i < 3; $i++) { 
                         if ($products[$i]["price"] > 1000) {

                       ?>
                        <tr>
                            <th scope="row"><?= $i ?></th>
                            <td><?= $products[$i]["name"] ?></td>
                            <td><?= $products[$i]["price"] ?></td>
                            <td><?= $products[$i]["q"] ?></td>
                        </tr>
                   <?php 
                }
            }
                ?>
                
            </tbody>
            </table>

            
        </div>

    </div>

    <script src="js/bootstrap.bundle.js"></script>
</body>
</html>
