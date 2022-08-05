<html>
    <head>
        <title>
            tambah data anggota
        </title>
    </head>
    <body>
        <h2>silahkan tanbah data anggota</h2>
        <br>
        <form method="post" action="proses3.php">
            <label for="id_katalog">Id Katalog</label>
            <input type="number" name="id_katalog" id="id_katalog">
            <br>
            <label for="judul_buku">Judul buku</label>
            <input type="text" name="judul_buku" id="judul_buku">
            <br>
            <label for="pengarang">Pengarang</label>
            <input type="text" name="pengarang" id="pengarang">
            <br>
            <label for="thn_terbit">Tahun Terbit</label>
            <input type="date" name="thn_terbit" id="thn_terbit">
            <br>
            <label for="penerbit">Penerbit</label>
            <input type="text" name="penerbit" id="penerbit">
            <br>
            <input type="submit" value="SIMPAN">
        </form>
    </body>
</html>