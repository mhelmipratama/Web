<?php
require_once "koneksi.php";
$id_karyawan = $_POST["id_karyawan"];
echo $id_karyawan;

$q = $database_connection->prepare("DELETE FROM `data_karyawan` WHERE `data_karyawan`.`id` = ?");
$q->execute([$id_karyawan]);
header("Location: ../halaman-data-karyawan.php");
