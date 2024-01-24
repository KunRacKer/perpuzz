<?php
$host="localhost";
$user="root";
$pass="";
$db="perpustakaan";
$koneksi=mysqli_connect($host,$user,$pass,$db);
// check coonection
if (mysqli_connect_errno()){
	echo "Koneksi database gagal : " .mysqli_connect_error();
}
?>