<?php
//panggil koneksi.php
include 'koneksi.php';

//ambil data yang ada di form  tambah2.php
$username = $_POST['username'];
$password = $_POST['password'];

//input data dari form ke database
mysqli_query($connect,"insert into admin values('','$username','$password')");

?>