<?php
//panggil koneksi.php
include 'koneksi.php';

//ambil data yang ada di form  tambah2.php
$username = $_POST['username'];
$password = $_POST['password'];

//input data dari form ke database
$input = mysqli_query($connect,"insert into admin values('','$username','$password')");

if($input){
    echo "
    <script>
        alert('Data Berhasil Ditambahkan');
        window.location = 'belajarcrud5.php';
    </script>
    ";
}else {
    echo "
    <script>
        alert('Data Gagal Ditambahkan');
        window.location = 'tambah2.php';
    </script>
    ";
}
?>