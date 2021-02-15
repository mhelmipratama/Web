<?php
$database_hostname = "sql207.epizy.com";
$database_username ="epiz_27935223";
$database_password = "xewLYdQKwKPBa";
$database_name = "epiz_27935223_quinnzel_corp";

try{
 //sintaks berhasil?  
 $database_connection= new PDO("mysql:host=$database_hostname;dbname=$database_name",
 $database_username, $database_password); 
 $cek = "Koneksi Berhasil";
//  echo $cek;
}catch(PDOException $x){
die($x->getMessage());
}
?>