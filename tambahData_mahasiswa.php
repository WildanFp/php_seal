
<?php
include "koneksi.php";
if (isset($_POST['submit'])) {
    $nim = $_POST['nim'];
    $nama = $_POST['nama'];
    $alamat = $_POST['alamat'];
    $tempat_lahir = $_POST['tempat_lahir'];
    $tanggal_lahir = $_POST['tanggal_lahir'];
    $jenis_kelamin = $_POST['jenis_kelamin'];
    $kode_jurusan = $_POST['kode_jurusan'];
    $id_jurusan = $_POST['id_jurusan'];
    $sql = "INSERT INTO mahasiswa (nim, nama, alamat, tempat_lahir, tanggal_lahir, jenis_kelamin, kode_jurusan, id_jurusan) VALUES ('$nim', '$nama', '$alamat', '$tempat_lahir', '$tanggal_lahir', '$jenis_kelamin', '$kode_jurusan', '$id_jurusan')";
    $query = mysqli_query($koneksi, $sql);
    if ($query) {
        header('Location: index.php');
    } else {
        die("Gagal menambah Data");
    }
}
?>

<!-- form tambah data jurusan -->

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js"></script>
    <title>Document</title>
</head>

<body>
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h2 class="py-3 text-center font-bold font-up blue-text">Tambah Data Mahasiswa</h2>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <form action="" method="POST">
                    <div class="mb-3">
                        <label for="nim" class="form-label">NIM</label>
                        <input type="text" class="form-control" id="nim" name="nim">
                    </div>
                    <div class="mb-3">
                        <label for="nama" class="form-label"> Nama </label>
                        <input type="text" class="form-control" id="nama" name="nama">
                    </div>
                    <div class="mb-3">
                        <label for="alamat" class="form-label"> Alamat </label>
                        <input type="text" class="form-control" id="alamat" name="alamat">
                    </div>
                    <div class="mb-3">
                        <label for="tempat_lahir" class="form-label"> Tempat Lahir </label>
                        <input type="text" class="form-control" id="tempat_lahir" name="tempat_lahir">
                    </div>
                    <div class="mb-3">
                        <label for="tanggal_lahir" class="form-label"> Tanggal Lahir </label>
                        <input type="date" class="form-control" id="tanggal_lahir" name="tanggal_lahir">
                    </div>
                    <div class="mb-3">
                        <label for="jenis_kelamin" class="form-label
                        "> Jenis Kelamin </label>
                        <select class="form-select" aria-label="Default select example" name="jenis_kelamin">
                            <option selected>Pilih Jenis Kelamin</option>
                            <option value="Laki-Laki">Laki-Laki</option>
                            <option value="Perempuan">Perempuan</option>
                        </select>
                    </div>
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
                        <label for="id_jurusan" class="form-label
                        "> ID Jurusan </label>
                        <select class="form-select" aria-label="Default select example" name="id_jurusan">
                            <option selected>Pilih ID Jurusan</option>
                            <?php
                            include "koneksi.php";
                            $sql = "SELECT * FROM jurusan";
                            $query = mysqli_query($koneksi, $sql);
                            while ($data = mysqli_fetch_array($query)) {
                                echo "<option value='$data[id_jurusan]'>$data[id_jurusan]</option>";
                            }
                            ?> </option>

                            </option>

                        </select>
                    </div>
                    <button type="submit" class="btn btn-primary" name="submit">Submit</button>


</html>
</body>