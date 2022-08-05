<html>

<head>
    <title>Menampilkan Database Web</title>
    <link rel="stylesheet" href="style.css">
    <style>
       .buku {
        background-color: yellowgreen;
        font-family: Arial, Helvetica, sans-serif;
       }
       .anggota {
        background-color: aqua;
       }
       .admin {
        background-color:lightgreen;
        width: 700px;
       }
       a {
        text-decoration: none;
       }


    </style>
</head>

<body>
    <center>
    <h1>CRUD DATA PERPUSTAKAAN</h2>
    <br />
    <a href="tambah.php">Tambah Data Anggota</a>
    <br>
    <div class="anggota"></div>
    <h3>Anggota</h3>
    <br></br>
    <center><table class="anggota" border="1" cellspacing="0" cellpadding="10"></center>
        <tr>
            <th>No</th>
            <th>Nama</th>
            <th>No Telp</th>
            <th>Alamat</th>
            <th>Email</th>
        </tr>

        <?php
        include 'koneksi.php';
        $no = 1;
        $data = mysqli_query($connect, "SELECT * FROM anggota");
        while ($d = mysqli_fetch_array($data)) {
        ?>
            <tr>
                <td><?php echo $no++ ?></td>
                <td><?php echo $d['nama'] ?></td>
                <td><?php echo $d['no_telp'] ?></td>
                <td><?php echo $d['alamat'] ?></td>
                <td><?php echo $d['email'] ?></td>
            </tr>
        <?php
        }
        ?>
    </table>
    <h3>ADMIN</h3>
    <a href="tambah2.php">Tambah Data Admin</a>
    <br></br>
    <table class="admin" border="1" cellspacing="0" cellpadding="10">
        <tr>
            <th>No</th>
            <th>Username</th>
            <th>Password</th>
        </tr>
        <?php
        $no = 1;
        $data = mysqli_query($connect, "SELECT * FROM admin");
        while ($d = mysqli_fetch_array($data)) {
        ?>
            <tr>
                <td><?php echo $no++ ?></td>
                <td><?php echo $d['username'] ?></td>
                <td><?php echo $d['password'] ?></td>
            </tr>
        <?php
        }
        ?>
    </table>
    <h3>BUKU</h3>
    <a href="tambah3.php">Tambah Data Buku</a>
    <br></br>
    <table class="buku" border="1" cellspacing="0" cellpadding="10">
        <tr>
            <th>No</th>
            <th>id_katalog</th>
            <th>judul_buku</th>
            <th>pengarang</th>
            <th>thn_terbit</th>
            <th>penerbit</th>
        </tr>

        <?php
        $no = 1;
        $data = mysqli_query($connect, "SELECT * FROM buku");
        while ($d = mysqli_fetch_array($data)) {
        ?>
            <tr>
                <td><?php echo $no++ ?></td>
                <td><?php echo $d['id_katalog'] ?></td>
                <td><?php echo $d['judul_buku'] ?></td>
                <td><?php echo $d['pengarang'] ?></td>
                <td><?php echo $d['thn_terbit'] ?></td>
                <td><?php echo $d['penerbit'] ?></td>
            </tr>
        <?php
        }
        ?>
    </table>
    </center>
</body>

</html>