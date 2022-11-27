
<?php
include "koneksi.php";
$id_mahasiswa = $_GET['id_mahasiswa'];
$sql = "SELECT * FROM mahasiswa WHERE id_mahasiswa = '$id_mahasiswa'";
$query = mysqli_query($koneksi, $sql);
$data = mysqli_fetch_array($query);
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js"></script>
    <title>Edit Data Mahasiswa</title>
</head>

<body>
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h2 class="py-3 text-center font-bold font-up blue-text">Edit Data Mahasiswa</h2>
            </div>
        </div>

        <form action="" method="POST">
            <div class="form-group">
                <label for="id_mahasiswa">ID Mahasiswa</label>
                <input type="text" class="form-control" name="id_mahasiswa" value="<?php echo $data['id_mahasiswa']; ?>" readonly>
            </div>
            <div class="mb-3">
                <label for="nim" class="form-label">NIM</label>
                <input type="text" class="form-control" id="nim" name="nim" value="<?php echo $data['nim']; ?>">
            </div>
            <div class="mb-3">
                <label for="nama" class="form-label"> Nama </label>
                <input type="text" class="form-control" id="nama" name="nama" value="<?php echo $data['nama']; ?>">
            </div>
            <div class="mb-3">
                <label for="alamat" class="form-label"> Alamat </label>
                <input type="text" class="form-control" id="alamat" name="alamat" value="<?php echo $data['alamat']; ?>">
            </div>
            <div class="mb-3">
                <label for="tempat_lahir" class="form-label"> Tempat Lahir </label>
                <input type="text" class="form-control" id="tempat_lahir" name="tempat_lahir" value="<?php echo $data['tempat_lahir']; ?>">
            </div>
            <div class="mb-3">
                <label for="tanggal_lahir" class="form-label"> Tanggal Lahir </label>
                <input type="date" class="form-control" id="tanggal_lahir" name="tanggal_lahir" value="<?php echo $data['tanggal_lahir']; ?>">
            </div>
            <div class="mb-3">
                <label for="jenis_kelamin" class="form-label
                        "> Jenis Kelamin </label>
                <select class="form-select" aria-label="Default select example" name="jenis_kelamin">
                    <option selected>Pilih Jenis Kelamin</option>
                    <option value="Laki-Laki" <?php if ($data['jenis_kelamin'] == 'Laki-Laki') {
                                                    echo "selected";
                                                } ?>>Laki-Laki</option>
                    <option value="Perempuan" <?php if ($data['jenis_kelamin'] == 'Perempuan') {
                                                    echo "selected";
                                                } ?>>Perempuan</option>
                </select>
            </div>
            <div class="form-group">
                <label for="kode_jurusan">Kode Jurusan</label>
                <input type="text" class="form-control" name="kode_jurusan" value="<?php echo $data['kode_jurusan']; ?>">
            </div>
            <div class="form-group">
                <label for="id_jurusan">ID Jurusan</label>
                <input type="text" class="form-control" name="id_jurusan" value="<?php echo $data['id_jurusan']; ?>" readonly>
            </div><br><br>
            <div class="row">
                <div class="col-md-12">
                    <button type="submit" class="btn btn-primary" name="simpan">Simpan</button>
                    <a href="index.php" class="btn btn-danger">Batal</a>
                </div>
        </form>





        <!-- Update Data Mahasiswa -->

        <?php
        include "koneksi.php";
        if (isset($_POST['simpan'])) {
            $id_mahasiswa = $_POST['id_mahasiswa'];
            $nim = $_POST['nim'];
            $nama = $_POST['nama'];
            $alamat = $_POST['alamat'];
            $tempat_lahir = $_POST['tempat_lahir'];
            $tanggal_lahir = $_POST['tanggal_lahir'];
            $jenis_kelamin = $_POST['jenis_kelamin'];
            $kode_jurusan = $_POST['kode_jurusan'];
            $id_jurusan = $_POST['id_jurusan'];

            $sql = "UPDATE mahasiswa SET nim = '$nim', nama = '$nama', alamat = '$alamat', tempat_lahir = '$tempat_lahir', tanggal_lahir = '$tanggal_lahir', jenis_kelamin = '$jenis_kelamin', kode_jurusan = '$kode_jurusan', id_jurusan = '$id_jurusan' WHERE id_mahasiswa = '$id_mahasiswa'";
            $query = mysqli_query($koneksi, $sql);
            if ($query) {
                header('Location: index.php');
            } else {
                echo "Gagal Update Data";
            }
        }
        ?>
</body>

</html>