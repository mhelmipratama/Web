<?php
require_once "koneksi.php";
$email= $_POST["email"];
$username= $_POST["username"];
$password= $_POST["password"];

$q = $database_connection->prepare("INSERT INTO `member` (`id_member`, `username`, `email`, `password` )
 VALUES (NULL, ?, ?, SHA1(?));");
$q->execute([$username, $email, $password]);
//header("Location: ../login-register.php");
?>
<script>
    alert('Registrasi berhasil');
    window.location.href = "../login-register.php";
</script>
