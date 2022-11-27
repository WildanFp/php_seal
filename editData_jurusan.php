<?php
include "koneksi.php";
$id_jurusan = $_GET['id_jurusan'];
$sql = "SELECT * FROM jurusan WHERE id_jurusan='$id_jurusan'";
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
    <title>Edit Data Jurusan</title>
</head>

<body>
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h2 class="py-3 text-center font-bold font-up blue-text">Edit Data </h2>
            </div>
        </div>
        <form action="" method="POST">
            <div class="form-group">
                <label for="id_jurusan">ID Jurusan</label>
                <input type="text" class="form-control" name="id_jurusan" value="<?php echo $data['id_jurusan']; ?>" readonly>
            </div>
            <div class="form-group">
                <label for="kode_jurusan">Kode Jurusan</label>
                <input type="text" class="form-control" name="kode_jurusan" value="<?php echo $data['kode_jurusan']; ?>">
            </div>
            <div class="form-group">
                <label for="nama_jurusan">Nama Jurusan</label>
                <input type="text" class="form-control" name="nama_jurusan" value="<?php echo $data['nama_jurusan']; ?>">
            </div><br><br>
            <div class="col-md-12">
                <button type="submit" class="btn btn-primary" name="simpan">Simpan</button>
                <a href="index.php" class="btn btn-danger">Batal</a>
            </div>

        </form>
    </div>

    <!-- Update data Jurusan -->

    <?php
    include "koneksi.php";
    if (isset($_POST['simpan'])) {
        $id_jurusan = $_POST['id_jurusan'];
        $kode_jurusan = $_POST['kode_jurusan'];
        $nama_jurusan = $_POST['nama_jurusan'];
        $sql = "UPDATE jurusan SET kode_jurusan='$kode_jurusan', nama_jurusan='$nama_jurusan' WHERE id_jurusan='$id_jurusan'";
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