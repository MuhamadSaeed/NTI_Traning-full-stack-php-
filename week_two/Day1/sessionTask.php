<?php

    session_start();


    if (empty($_SESSION['users'])) {
        $_SESSION['users'] = [];
    }

    if ($_SERVER['REQUEST_METHOD'] == 'POST') {

        if (isset($_POST['save'])) {
            if (!empty($_POST['password']) && !empty($_POST['email'])) {
                $newUser = [
                    'password' => htmlspecialchars($_POST['password']),
                    'email' => htmlspecialchars($_POST['email'])
                ];
                array_push($_SESSION['users'], $newUser);
            }
        } elseif (isset($_POST['clr'])) {
            $_SESSION['users'] = [];
        } elseif (isset($_POST['rmv'])) {
            array_pop($_SESSION['users']);
        }
    }



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
      <div class="row justify-content-center align-items-center vh-100">
          
 <form method="POST">
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Email address</label>
    <input type="email" name="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
  </div>
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">Password</label>
    <input type="password" name="password" class="form-control" id="exampleInputPassword1">
  </div>
  <button type="submit" name="save" class="btn btn-primary">Submit</button>

  <button type="submit" name="clr" class="btn btn-danger me-md-2">clear session</button>
<button type="submit" name="rmv" class="btn btn-warning">  remove last one</button>
</form>

 <div class="card">
            <div class="card-header text-black">
                <h3> users</h3>
            </div>
            <div class="card-body">
                <?php if (empty($_SESSION['users'])) { ?>
                    <p class="text-bold">no users</p>
                <?php } else { ?>
                    <?php foreach ($_SESSION['users'] as $user) { ?>
                        <div class="user-card">
                            <h5>user password : <?php echo $user['password']; ?></h5>
                            <p>mail : <?php echo $user['email']; ?></p>
                        </div>
                    <?php } ?>
                <?php } ?>
            </div>
        </div>
      </div>
    </div>

    <script src="js/bootstrap.bundle.js"></script>
  </body>
</html>
