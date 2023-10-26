<!DOCTYPE html>
<html>
<head>
    <title>Input Data</title>
</head>
<body>
<h2>Input Mahasiswa</h2>
<form method="POST" action="proses.php?aksi=tambah">
    <label for="nama">Name:</label><br>
    <input type="text" id="nama" name="nama"><br>
    <label for="alamat">Alamat:</label><br>
    <textarea id="alamat" name="alamat" rows="4" cols="16"></textarea><br>
    <label for="umur">Usia:</label><br>
    <input type="number" id="umur" name="umur"><br><br>
    <input type="submit"value="Simpan">
</form>

</body>
</html>
