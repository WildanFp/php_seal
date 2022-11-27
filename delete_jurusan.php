<?php
include "koneksi.php";
$id = $_GET['id_jurusan'];
$sql = "DELETE FROM jurusan WHERE id_jurusan=$id";
$query = mysqli_query($koneksi, $sql);
if ($query) {
    header('Location: index.php');
} else {
    die("Gagal menghapus Data");
}