<html>
    <head>
        <title>
            tambah data anggota
        </title>
    </head>
    <body>
        <h2>silahkan tambah data anggota</h2>
        <br>
        <form method="post" action="proses.php">
            <label for="nama">nama</label>
            <input type="text" name="nama" id="nama">
            <br>
            <label for="no_telp">no tlp</label>
            <input type="number" name="no_telp" id="no_telp">
            <br>
            <label for="alamat">alamat</label>
            <input type="text" name="alamat" id="alamat">
            <br>
            <label for="email">email</label>
            <input type="email" name="email" id="email">
            <br>
            <label for="password">password</label>
            <input type="password" name="password" id="password">
            <br>
            <input type="submit" value="SIMPAN">
        </form>
    </body>
</html>