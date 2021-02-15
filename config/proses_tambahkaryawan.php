<?php
require_once "koneksi.php";

$nama_lengkap = $_POST["nama_lengkap"];
$jabatan = $_POST["jabatan"];
$no_hp = $_POST["no_hp"];
$image = $_FILES["photo"]["name"];
$tmp_dir = $_FILES["photo"]["tmp_name"];
$imageSize = $_FILES["photo"]["size"];

$upload_dir = "uploads/";
$imgExt = strtolower(pathinfo($image, PATHINFO_EXTENSION));
$valid_extensions = array('jpeg', 'jpg', 'png', 'gif', 'pdf');
$photo = rand(1000, 1000000) . "." . $imgExt;
move_uploaded_file($tmp_dir, $upload_dir . $photo);


$q = $database_connection->prepare("INSERT INTO `data_karyawan` (`id`, `nama_lengkap`, 
`jabatan`, `no_hp`, `photo`) VALUES (NULL, ?, ?, ?, ?);");
$q->execute([$nama_lengkap, $jabatan, $no_hp, $photo]);
header("Location: ../halaman-data-karyawan.php");
