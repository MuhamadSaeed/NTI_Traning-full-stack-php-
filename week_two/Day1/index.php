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
          
          <form class="col-6 bg-light p-5 " method="POST"  action="funs.php">
            <h1 class="text-center">user information</h1>
          <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label"
              >email address</label
            >
            <input
              type="email"
              name="email" 
              class="form-control"
              id="exampleInputEmail1"
              aria-describedby="emailHelp"
            />
          </div>
          <div class="mb-3">
            <label for="exampleInputPassword1" class="form-label"
              >name</label
            >
            <input
              type="text"
              name="name"
              class="form-control"
              id="exampleInputPassword1"
            />
          </div>
          <div class="mb-3">
            <label for="exampleInputPassword1" class="form-label"
              >track</label
            >
            <select name="track" id="exampleInputPassword1" class="form-control">
              <option value="web">web</option>
            </select>
          </div>
          <div class="mb-3">
            <label for="exampleInputPassword1" class="form-label"
              >number</label
            >
            <input
              type="number"
              name="number"
              class="form-control"
              id="exampleInputPassword1"
            />
          </div>
          <button type="submit" class="btn btn-primary">Submit</button>
        </form>
      </div>
    </div>

    <script src="js/bootstrap.bundle.js"></script>
  </body>
</html>
