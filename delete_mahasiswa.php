<?php
include "koneksi.php";
$id = $_GET['id_mahasiswa'];
$sql = "DELETE FROM mahasiswa WHERE id_mahasiswa=$id";
$query = mysqli_query($koneksi, $sql);
if ($query) {
    header('Location: index.php');
} else {
    die("Gagal menghapus Data");
}