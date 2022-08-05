<?php
//panggil koneksi.php
include 'koneksi.php';

//ambil data yang ada di form  tambah.php
$id_katalog = $_POST['id_katalog'];
$judul_buku = $_POST['judul_buku'];
$pengarang = $_POST['pengarang'];
$thn_terbit = $_POST['thn_terbit'];
$penerbit = $_POST['penerbit'];

//input data dari form ke database
mysqli_query($connect,"insert into buku values('','$id_katalog','$judul_buku','$pengarang','$thn_terbit','$penerbit')");

?>