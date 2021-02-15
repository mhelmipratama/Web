<?php
require_once "koneksi.php";

$username = $_POST["username"];
$password = $_POST["password"];


$q = $database_connection->prepare("UPDATE `member` SET `username` = ?, 
`password` = SHA1(?) WHERE `user`.`id` = ?");
$q->execute([$username, $password]);
header("Location: ../halaman-menu-utama.php");