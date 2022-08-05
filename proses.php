<?php
//panggil koneksi.php
include 'koneksi.php';

//ambil data yang ada di form  tambah.php
$nama = $_POST['nama'];
$no_telp = $_POST['no_telp'];
$alamat = $_POST['alamat'];
$email = $_POST['email'];
$password = $_POST['password'];

//input data dari form ke database
mysqli_query($connect,"insert into anggota values('','$nama','$no_telp','$alamat','$email','$password')");

?>