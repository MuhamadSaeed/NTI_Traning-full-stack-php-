<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="css/bootstrap.min.css" />
    <title>Document</title>
  </head>
<body class="">
    <?php 
        $products = ["html", "css", "js"];

        array_push($products, "bootstrap" );

        array_pop($products);

        array_unshift($products, "sass" );

        array_shift($products);

        print_r($products);


    ?>


    <script src="js/bootstrap.bundle.js"></script>
</body>
</html>
