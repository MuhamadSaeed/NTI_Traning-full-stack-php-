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
        <div class="row">
        <table class="table mt-4 text-center">
            <thead class="table-dark">
                <tr>
                    <th>Key</th>
                    <th>Value</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>PHP_SELF</td>
                    <td><?= $_SERVER['PHP_SELF'] ?></td>
                </tr>
                <tr>
                    <td>SERVER_NAME</td>
                    <td><?= $_SERVER['SERVER_NAME'] ?></td>
                </tr>
                <tr>
                    <td>HTTP_HOST</td>
                    <td><?= $_SERVER['HTTP_HOST'] ?></td>
                </tr>
                <tr>
                    <td>USER_AGENT</td>
                    <td><?= $_SERVER['HTTP_USER_AGENT'] ?></td>
                </tr>
                <tr>
                    <td>REQUEST_METHOD</td>
                    <td><?= $_SERVER['REQUEST_METHOD'] ?></td>
                </tr>
            </tbody>
        </table>

        </div>
    </div>

    <script src="js/bootstrap.bundle.js"></script>
  </body>
</html>
