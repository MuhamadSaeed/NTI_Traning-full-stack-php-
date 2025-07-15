<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="css/bootstrap.min.css" />
    <title>Document</title>
  </head>
<body class="bg-info">
    <div class="container mt-5">
        <table class="table bg-white">
            <thead>
                <tr>
                    <th scope="col" class="bg-black text-white">#</th>
                    <th scope="col" class="bg-black text-white">First</th>
                    <th scope="col" class="bg-black text-white">Last</th>
                    <th scope="col" class="bg-black text-white">Handle</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <th scope="row">1</th>
                    <td>Mark</td>
                    <td>Otto</td>
                    <td>@mdo</td>
                </tr>
                <tr>
                    <th scope="row">2</th>
                    <td>Jacob</td>
                    <td>Thornton</td>
                    <td>@fat</td>
                </tr>
                <tr>
                    <th scope="row">3</th>
                    <td>John</td>
                    <td>Doe</td>
                    <td>@social</td>
                </tr>
            </tbody>
        </table>

        <form class="was-validated p-3 bg-white">
            <div class="mb-3">
                <label class="form-label">name:</label>
                <input type="text" class="form-control is-valid" id="validationServer01" required />
            </div>
            <div class="mb-3">
                <label class="form-label">email</label>
                <input type="email" class="form-control is-valid" id="validationServer02" required />
            </div>
            <div class="mb-3">
                <label class="form-label">password</label>
                <input type="password" class="form-control is-valid" id="validationServer03" required />
            </div>
            <div class="mb-3 d-flex">
                <button type="submit" class="btn btn-primary w-50">Submit</button>
                <button type="button" class="btn btn-warning w-50" data-bs-toggle="modal" data-bs-target="#exampleModal">
                     read more info
                </button>
            </div>
        </form>

        <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h1 class="modal-title fs-5" id="exampleModalLabel">some info about the password</h1>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <h6>1- make the length of the password more than 8 chars</h6>
                        <h6>1- the pass should conatins special chars like $%&</h6>
                        <h6>...................................................</h6>
                        <h6>....................................................</h6>
                    </div>
                </div>
            </div>
        </div>

    </div>
    <script src="js/bootstrap.bundle.js"></script>
</body>
</html>
