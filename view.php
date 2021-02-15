<?php
session_start();
include 'config/crud_karyawan.php';
if (isset($_SESSION['username']) === false) { // cek session apakah kosong(belum login) maka alihkan ke login.php
    header('Location: login.php');
}

$id_karyawan = $_POST["id_karyawan"];
$nama_lengkap = $_POST["nama_lengkap"];
$jabatan = $_POST["jabatan"];
$no_hp = $_POST["no_hp"];
$photo = $_POST["photo"];
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Quinnzel Corp</title>
    <!-- CSS only -->
    <link rel="stylesheet" href="bootstrap4/css/bootstrap.min.css">
    <link rel="stylesheet" href="css/style.css">
    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Poppins:600&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">
    <script src="https://kit.fontawesome.com/a81368914c.js"></script>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
</head>

<body>
    <br>
    <br>
    <br>


    <div class="row gutters-sm">
        <div class="col-sm-6 offset-sm-3">
            <div class="card">
                <div class="card-body">
                    <div class="d-flex flex-column align-items-center text-center">
                        <img src="config/uploads/<?php echo $photo; ?>" alt="Admin" class="rounded-circle" width="150">
                        <div class="mt-3">
                            <h4><?php echo $nama_lengkap; ?></h4>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-sm-6 offset-sm-3">
            <div class="card mb-3">
                <div class="card-body">
                    <div class="row">
                        <div class="col-sm-3">
                            <h6 class="mb-0">Nama :</h6>
                        </div>
                        <div class="col-sm-9 text-secondary"><?php echo $nama_lengkap; ?></div>

                    </div>
                    <hr style="width: 100%;">
                    <div class="row">
                        <div class="col-sm-3">
                            <h6 class="mb-0">Jabatan :</h6>
                        </div>
                        <div class="col-sm-9 text-secondary"> <?php echo $jabatan; ?> </div>
                    </div>
                    <hr style="width: 100%;">
                    <div class="row">
                        <div class="col-sm-3">
                            <h6 class="mb-0">No_HP :</h6>
                        </div>
                        <div class="col-sm-9 text-secondary"> <?php echo $no_hp; ?></div>
                    </div>
                    <hr style="width: 100%;">

                </div>
            </div>
        </div>
    </div>



    <!-- add/edit form modal end -->

    <div>

        <!-- JS, Popper.js, and jQuery -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
        <footer><h6>@Copyright by 18111393_Muhamad Helmi Pratama_TIFRP18CIDA_UASWEB1</h6></footer>
    </div>

</body>


</html>