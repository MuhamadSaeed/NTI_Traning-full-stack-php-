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
        // addition example
        $products2 = [
            "html" => 10,
            "css" => 15,
            "js" => 20
        ];

        $keys = array_keys($products2);

        echo $keys[0] . "<br>";

        foreach ($keys as $key) {
            echo "<br>" . $key . "<br>";
        };

        // another addition example
        $products3 = [
            "html" => 10,
            "css" => 15,
            "js" => 20
        ];

        $arr_vals = array_values($products3);

        echo $arr_vals[0] . "<br>";

        foreach ($arr_vals as $value) {
            echo "<br>" . $value . "<br>";
        };

        //print_r($arr_vals)

    ?>


    <script src="js/bootstrap.bundle.js"></script>
</body>
</html>
