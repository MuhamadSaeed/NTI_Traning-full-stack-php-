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

        echo count($products);

        if (in_array("js", $products)) {
            echo "js is found <br>";
        }

        $values = array_values($products);
        print_r($values);

    ?>


    <script src="js/bootstrap.bundle.js"></script>
</body>
</html>
