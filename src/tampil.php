<?php
require('Database.php');

$database = new Database();
$result = $database->tampil();

if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        echo "ID: " . $row['id'] . "<br>";
        echo "Nama: " . $row['nama'] . "<br>";
        echo "Alamat: " . $row['alamat'] . "<br>";
        echo "Umur: " . $row['umur'] . "<br><br>";
    }
} else {
    echo "Tidak ada data mahasiswa.";
}
?>
