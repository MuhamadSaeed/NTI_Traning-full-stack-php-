<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="css/bootstrap.min.css" />
    <title>Document</title>
  </head>
<body class="bg-black text-white">
    <?php 
        $products = [
            ["id" => 1,"name" => "mohamed", "subject" => "maths", "grade" => 88],
            ["id" => 2,"name" => "khaled", "subject" => "maths", "grade" => 22],
            ["id" => 3,"name" => "mohamed", "subject" => "maths", "grade" => 88],
            ["id" => 4,"name" => "mohamed", "subject" => "maths", "grade" => 55],
            ["id" => 5,"name" => "ali", "subject" => "maths", "grade" => 50]
        ];

        // this is the previous task
        
                //echo $_SERVER["SERVER_NAME"];
                //echo "<br>";
                //echo $_SERVER["REMOTE_ADDR"];
        
       //

    ?>
    <div class="container">
        <div class="row mt-5">
            <table class="table">
                <thead>
                    <tr>
                    <th class="bg-dark text-white border-1" scope="col">name</th>
                    <th class="bg-dark text-white border-1" scope="col">subject</th>
                    <th class="bg-dark text-white border-1" scope="col">grade</th>
                    <th class="bg-dark text-white border-1" scope="col">stauts</th>
                    <th class="bg-dark text-white border-1" scope="col">view</th>
                    </tr>
                </thead>
                <tbody>
                    <?php 
                        foreach($products as $value) {
                    ?>
                        <tr class="<?= $value["grade"] >= 50 ? 'table-success' : 'table-danger' ?>">
                        <td><?= $value["name"] ?></td>
                        <td><?= $value["subject"] ?></td>
                        <td><?= $value["grade"] ?></td>
                        <td ><?= $value["grade"] >= 50 ? "passed" : "failed" ?></td>
                        <td>
                            <button class="btn btn-primary " data-bs-toggle="modal" data-bs-target="#modal-<?= $value["id"] ?>">View</button>
                        </td>
                        </tr>
                            <!-- modal -->
                         <div class="modal fade" id="modal-<?= $value["id"] ?>" tabindex="-1"  aria-hidden="true">
                            <div class="modal-dialog">
                                <div class="modal-content bg-dark text-white">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="modalLabel<?= $value["id"] ?>">details</h5>
                                    <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal" aria-label="Close"></button>
                                </div>
                                <div class="modal-body">
                                    <p><strong>name:</strong> <?= $value["name"] ?></p>
                                    <p><strong>subject:</strong> <?= $value["subject"] ?></p>
                                    <p><strong>grade:</strong> <?= $value["grade"] ?></p>
                                    <p><strong>status:</strong> <?= $value["grade"] >= 50 ? "passed" : "failed" ?></p>
                                </div>
                                </div>
                            </div>
                        </div>
                    <?php
                        }
                    ?>
                </tbody>
            </table>

           </div>
    </div>

    <script src="js/bootstrap.bundle.js"></script>
</body>
</html>
