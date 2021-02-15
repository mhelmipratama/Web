<?php
session_start();
include 'config/koneksi.php';
include 'config/crud_karyawan.php';
if (isset($_SESSION['username']) === false) { // cek session apakah kosong(belum login) maka alihkan ke login.php
    header('Location: login.php');
}


?>
<!doctype html>
<html lang="en" id="home">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Quinnzel Corp</title>
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

    <div class="container">
        <div class="alert alert alert-primary" role="alert">
            <h4 class="text-primary text-center">Data Data Karyawan</h4>
        </div>

        <!-- add/edit form modal -->



        <div class="row mb-3">
            <div class="col-3">
                <a href="tambahKaryawan.php" class="btn btn-primary">Add New <i class="fa fa-user-circle-o"></i></a>
            </div>

        </div>
        <!-- table -->
        <table class="table" id="userstable">
            <thead>
                <tr>
                    <th scope="col"></th>
                    <th scope="col">Nama</th>
                    <th scope="col">Jabatan</th>
                    <th scope="col">No.HP</th>
                    <th scope="col"></th>
                </tr>
            </thead>
            <tbody>
                <?php while ($row = $q->fetch()) :
                    $id = $row['id'];
                    $photo = $row['photo'];
                    $nama = $row['nama_lengkap'];
                    $jabatan = $row['jabatan'];
                    $no_hp = $row['no_hp'];
                ?>
                    <tr>
                        <td class="align-middle"><img src="config/uploads/<?php echo $photo; ?>" width="100px" height="100px"  class="img-thumbnail rounded float-left"></td>
                        <td class="align-middle"><?php echo $nama; ?></td>
                        <td class="align-middle"><?php echo $jabatan; ?></td>
                        <td class="align-middle"><?php echo $no_hp; ?></td>
                        <td class="align-middle">
                            <form action="editKaryawan.php" method="POST">
                                <input type="hidden" name="id_karyawan" value="<?php echo $id; ?>" />
                                <input type="hidden" name="nama_lengkap" value="<?php echo $nama; ?>" />
                                <input type="hidden" name="jabatan" value="<?php echo $jabatan; ?>" />
                                <input type="hidden" name="no_hp" value="<?php echo $no_hp; ?>" />
                                <button type="submit" class="btn btn-primary mr-3 edituser"><i class="fa fa-pencil-square-o fa-lg"></i></button>
                            </form>
                        </td>
                        <td class="align-middle">
                            <form action="view.php" method="POST">
                                <input type="hidden" name="id_karyawan" value="<?php echo $id; ?>" />
                                <input type="hidden" name="nama_lengkap" value="<?php echo $nama; ?>" />
                                <input type="hidden" name="jabatan" value="<?php echo $jabatan; ?>" />
                                <input type="hidden" name="no_hp" value="<?php echo $no_hp; ?>" />
                                <input type="hidden" name="photo" value="<?php echo $photo; ?>" />
                                <button type="submit" class="btn btn-success mr-3 profile"><i class="fa fa-address-card-o" aria-hidden="true"></i></button>
                            </form>
                        </td>

                        <!-- form delete -->
                        <td class="align-middle">
                            <form action="config/hapus_karyawan.php" method="POST">
                                <input type="hidden" name="id_karyawan" value="<?php echo $id; ?>" />
                                <button type="submit" class="btn btn-danger deleteuser"><i class="fa fa-trash-o fa-lg"></i></button>
                            </form>
                        </td>
                    </tr>

                <?php endwhile; ?>
            </tbody>
        </table><!-- table -->

        <input type="hidden" name="currentpage" id="currentpage" value="1">
    </div>




    <section class="contact" id="contact" style="background-color: gray;">
        <div class="container">
            <div class="row">
                <div class="col-sm-12 text-center">
                    <h2>Contact</h2>
                    <hr>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-6 offset-sm-3">
                    <form>
                        <div class="form-group">
                            <label for="nama">Nama</label>
                            <input type="text" id="nama" class="form-control" placeholder="Masukkan Nama">
                        </div>
                        <div class="form-group">
                            <label for="email">Email</label>
                            <input type="email" id="email" class="form-control" placeholder="Masukkan Email">
                        </div>
                        <div class="form-group">
                            <label for="telp">No Telepon</label>
                            <input type="tel" id="telp" class="form-control" placeholder="Masukkan no telepon">
                        </div>
                        <div class="form-group">
                            <label for="pesan">Pesan</label>
                            <textarea class="form-control" rows="10" placeholder="Masukkan Pesan"></textarea>
                        </div>
                        <button type="submit" class="btn btn-primary">Kirim Pesan</button>
                    </form>
                </div>
            </div>
        </div>
    </section>

    <footer>
        <div class="container text-center">
            <div class="row">
                <div class="col-sm-12">
                    <p>&copy; Copyright by 18111393_Muhamad Helmi Pratama_TIFRP18CIDA_UASWEB1</p>
                </div>
            </div>
        </div>
    </footer>




    <script src="bootstrap4/js/jquery-3.5.1.min.js"></script>
    <script src="bootstrap4/js/bootstrap.min.js"></script>
    <script src="bootstrap4/js/script.js"></script>

</body>

</html>