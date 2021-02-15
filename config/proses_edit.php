<?php
require_once "koneksi.php";
$id_karyawan = $_POST["id_karyawan"];
$nama_lengkap = $_POST["nama_lengkap"];
$jabatan = $_POST["jabatan"];
$no_hp = $_POST["no_hp"];



$q = $database_connection->prepare("UPDATE `data_karyawan` SET `nama_lengkap` = ?, 
`jabatan` = ?, `no_hp` = ? WHERE `data_karyawan`.`id` = ?");
$q->execute([$nama_lengkap, $jabatan, $no_hp, $id_karyawan]);
header("Location: ../halaman-data-karyawan.php");
