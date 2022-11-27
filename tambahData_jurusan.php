<?php
include "koneksi.php";
if (isset($_POST['submit'])) {

    $kode_jurusan = $_POST['kode_jurusan'];
    $nama_jurusan = $_POST['nama_jurusan'];
    $sql = "INSERT INTO jurusan (kode_jurusan, nama_jurusan) VALUE ('$kode_jurusan', '$nama_jurusan')";
    $query = mysqli_query($koneksi, $sql);
    if ($query) {
        header('Location: index.php');
    } else {
        die("Gagal menambah Data");
    }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js"></script>
    <title>Tambah Data Jurusan</title>
</head>

<body>
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h2 class="py-3 text-center font-bold font-up blue-text">Tambah Data Jurusan</h2>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <form action="" method="POST">
                    <div class="mb-3">
                        <label for="kode_jurusan" class="form-label
                        "> Kode Jurusan </label>
                        <select class="form-select" aria-label="Default select example" name="kode_jurusan">
                            <option selected>Pilih Kode Jurusan</option>
                            <option value="TI">TI</option>
                            <option value="SI">SI</option>
                            <option value="MI">MI</option>
                            <option value="TK">TK</option>
                            <option value="AN">AN</option>
                        </select>
                    </div>
                    <div class="mb-3">
                        <label for="nama_jurusan" class="form-label"> Nama Jurusan </label>
                        <input type="text" class="form-control" id="nama_jurusan" name="nama_jurusan">
                    </div>
                    <button type="submit" class="btn btn-primary" name="submit">Submit</button>
                </form>
            </div>
        </div>
    </div>
</body>
</html>