 <?php 
    if ($_SERVER['REMOTE_ADDR'] == "127.0.0.1") {
        header("Location: denied.php");
        exit();
    } else {
        echo "<h1 class='text-center mt-5 alert alert-success'>hello </h1>";
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
  <body>
    <div class="container">
        <div class="row">
           
        </div>
    </div>

    <script src="js/bootstrap.bundle.js"></script>
  </body>
</html>
