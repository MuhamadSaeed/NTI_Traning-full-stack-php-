<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="css/bootstrap.min.css" />
    <title>Document</title>
  </head>
<body class="bg-black text-white">
    <div class="container mt-5">
      <div class="row">
        <h1 class="text-center text-white">validation form</h1>
        <form class="row g-3 was-validated" invalid>
            <div class="col-md-6">
                <label for="validationCustom01" class="form-label">Full name</label>
                <input type="text" class="form-control is-valid" id="validationCustom01" required>
            </div>
            <div class="col-md-6">
                <label for="validationCustom02" class="form-label">email</label>
                <input type="email" class="form-control is-valid" id="validationCustom02" required>
            </div>
            <div class="col-md-4">
                <label for="validationCustom03" class="form-label">age</label>
                <input type="number" class="form-control is-valid" id="validationCustom03" required>
            </div>
            <div class="col-md-4">
                <label for="validationCustom04" class="form-label">gender</label>
                <select class="form-select is-valid" id="validationCustom04" required>
                    <option value="f">female</option>
                    <option value="m">male</option>
                </select>
            </div>
            <div class="col-md-4">
                <label for="validationCustom05" class="form-label">degree</label>
                <input type="number" class="form-control is-valid" id="validationCustom05" required>
            </div>
            <div class="mb-3">
                <label for="validationTextarea" class="form-label">notices</label>
                <textarea class="form-control" id="validationTextarea" placeholder="" required></textarea>
            </div>
            <div class="col-12 d-flex gap-2">
                <button class="btn btn-primary w-50" type="submit">Submit form</button>
                <button  type="submit" class="btn btn-warning w-50" data-bs-toggle="modal" data-bs-target="#exampleModal">
                    show degrees
                </button>
            </div>
        </form>

        <!-- Modal -->
        <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h1 class="modal-title fs-5" id="exampleModalLabel">degrees</h1>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <table class="table">
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
                    </div>
                </div>
            </div>
        </div>
      </div>
    </div>
    <script src="js/bootstrap.bundle.js"></script>
</body>
</html>
