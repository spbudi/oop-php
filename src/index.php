<?php
include 'database.php';
$db = new Database();
?>

<!DOCTYPE html>
<html>
<head>
    <title>drud</title>
</head>
<body>

<h1>Data Mahasiswa</h1>
<a href="input.php">Input Data</a>
<table border="1">
    <tr>
        <th>No</th>
        <th>Nama</th>
        <th>Alamat</th>
        <th>Usia</th>
        <th>Opsi</th>
    </tr>
    <?php
    $no = 1;
    foreach ($db->tampil() as $mahasiswa){
    ?>
    <tr>
        <td><?php echo $no++?></td>
        <td><?php echo $mahasiswa['nama']; ?></td>
        <td><?php echo $mahasiswa['alamat']; ?></td>
        <td><?php echo $mahasiswa['umur']; ?></td>
        <td>
            <a href="proses.php?id=<?php echo $mahasiswa['id']; ?>&aksi=hapus">Hapus</a>
        </td>
    </tr>
    <?php
    }
    ?>
</table>

</body>
</html>
