<?php
include 'database.php';
$db = new Database();

$aksi = $_GET['aksi'];

if ($aksi == "tambah"){
    // tambah data
    $db->simpan($_POST['nama'],$_POST['alamat'],$_POST['umur']);
    header("location:index.php");
} elseif ($aksi == "hapus"){
    $db->hapus($_GET['id']);
    header("location:index.php");
}
?>