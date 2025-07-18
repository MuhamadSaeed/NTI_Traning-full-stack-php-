<?php
 $track=$_POST['track'] ?? '';
 $name=$_POST['name'] ?? '';
 $email=$_POST['email'] ?? '';
 $number=$_POST['number'] ?? '';

?> 


<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="css/style.css" />
    <link rel="stylesheet" href="css/bootstrap.min.css" />
    <!-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet"> -->

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
            <p class="card-text">name: <?= (explode(' ', $name)[0]) ?></p>
            <p class="card-text">track: <?= $track  ?></p>
            <p class="card-text">mail: <?= $email ?> </p>
            <p class="card-text">number: <?= $number ?> </p>
          </div>
        </div>
        
      </div>
    </div>
</body>
</html>
