<!-- first two tasks are here -->

<?php
 $track=$_POST['track'] ?? '';
 $name=$_POST['name'] ?? '';
 $email=$_POST['email'] ?? '';
 $number=$_POST['number'] ?? '';


 function getTotall($x, $y) {
  return $x + $y;
 }


/*
 $tax_calculate = fn($price, $tax) => $price + $tax;

 echo $tax_calculate(1200, 25);
 echo getTotall(20, 2);

 $lengthName =  strlen($name);
 echo $lengthName . "<br>";
*/

 $lengthName =  strlen($name);
 echo $lengthName . "<br>";

 $para =  "this is **** ";
 echo str_replace("****", "bad" ,$para) . "<br>";


 $para =  "this is **** ";
 echo substr($para, 0, 5) . "<br>";

 $para =  "this is **** ";
 echo ucfirst(strtoupper($para)) . "<br>";

?> 


<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="css/style.css" />
    <link rel="stylesheet" href="css/bootstrap.min.css" />
    <title>Document</title>
  </head>
<body style="background: #9fc69f">
    <div class="container">
      <div class=" row justify-content-center align-items-center vh-100">

        <div class="card border-1" style="width: 20rem; ">
          <h1 class="text-center">user information</h1>
          <div class="alert alert-success" role="alert">
            hello <?= $name ?> , thats your info 
          </div>        
          <div class="card p-3 mb-4">
            <p class="card-text">name: <?= str_replace($name, "****" ,$name) ?></p> <!--  made it hidden --> 
            <p class="card-text">track: <?= ucfirst(strtoupper($track))  ?></p>
            <p class="card-text">mail: <?= substr($email, 0, 20) ?> </p>
            <p class="card-text">number: <?= $number ?> </p>
          </div>
        </div>
        
      </div>
    </div>
</body>
</html>
