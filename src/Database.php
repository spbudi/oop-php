<?php
class Database
{
    private $host = "localhost";
    private $uname = "root";
    private $pass = "spBudi93!";
    private $db = "db_akademik";

    private $conn;

    function __construct() {
        $this->conn = new mysqli($this->host, $this->uname, $this->pass, $this->db);
        if ($this->conn->connect_error) {
            die("Koneksi Gagal: " . $this->conn->connect_error);
        }
    }

    function tampil(){
        $data = mysqli_query($this->conn, "SELECT * FROM mahasiswa");
        $rows = mysqli_fetch_all($data, MYSQLI_ASSOC);
        return $rows;
    }
    function simpan($nama, $alamat, $umur){
        mysqli_query($this->conn, "INSERT INTO mahasiswa(nama,alamat,umur) VALUES('$nama','$alamat','$umur')");
    }
    function hapus($id){
        mysqli_query($this->conn, "DELETE FROM mahasiswa WHERE id = '$id'");
    }

}
