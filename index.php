<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>CRUD</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto|Varela+Round">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>

    <script>
    $(document).ready(function() {
        // Activate tooltip
        $('[data-toggle="tooltip"]').tooltip();

        // Select/Deselect checkboxes
        var checkbox = $('table tbody input[type="checkbox"]');
        $("#selectAll").click(function() {
            if (this.checked) {
                checkbox.each(function() {
                    this.checked = true;
                });
            } else {
                checkbox.each(function() {
                    this.checked = false;
                });
            }
        });
        checkbox.click(function() {
            if (!this.checked) {
                $("#selectAll").prop("checked", false);
            }
        });
    });
    </script>
</head>

<body>
    <div class="container-xl">
        <div class="table-responsive">
            <div class="table-wrapper">
                <div class="table-title">
                    <div class="row">
                        <div class="col-sm-6">
                            <h2>Manage <b>Jurusan</b></h2>
                        </div>
                        <div class="col-sm-6">
                            <a onclick="window.location='tambahData_jurusan.php'" class="btn btn-success"
                                data-toggle="modal"><i class="material-icons">&#xE147;</i> <span>Add New
                                    Jurusan</span></a>
                            <a href="#deleteEmployeeModal" class="btn btn-danger" data-toggle="modal"><i
                                    class="material-icons">&#xE15C;</i> <span>Delete</span></a>
                        </div>
                    </div>
                </div>
                <table class="table table-striped table-hover">
                    <thead>
                        <tr>
                            <th>ID Jurusan</th>
                            <th>Kode Jurusan</th>
                            <th>Nama Jurusan</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                                    include "koneksi.php";
                                    $sql = "SELECT * FROM jurusan";
                                    $query = mysqli_query($koneksi, $sql);
                                    while ($data = mysqli_fetch_array($query)) {
                                    ?>
                        <tr>
                            <td><?php echo $data['id_jurusan']; ?></td>
                            <td><?php echo $data['kode_jurusan']; ?></td>
                            <td><?php echo $data['nama_jurusan']; ?></td>
                            <td>
                                <a href="editData_jurusan.php?id_jurusan=<?php echo $data['id_jurusan']; ?>"
                                    class="edit" ><i class="material-icons" 
                                        title="Edit">&#xE254;</i></a>

                                <a href="delete_jurusan.php?id_jurusan=<?php echo $data['id_jurusan']; ?>"
                                    class="delete" ><i class="material-icons" 
                                        title="Delete">&#xE872;</i></a>
                            </td>
                        </tr>
                        <?php
                                    }
                                    ?>
                        </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>

    <div class="container-xl">
        <div class="table-responsive">
            <div class="table-wrapper">
                <div class="table-title">
                    <div class="row">
                        <div class="col-sm-6">
                            <h2>Manage <b>Mahasiswa</b></h2>
                        </div>
                        <div class="col-sm-6">
                        <a onclick="window.location='tambahData_mahasiswa.php'" class="btn btn-success"
                                data-toggle="modal"><i class="material-icons">&#xE147;</i> <span>Add New
                                    mahasiswa</span></a>
                            <a href="#deleteEmployeeModal" class="btn btn-danger" data-toggle="modal"><i
                                    class="material-icons">&#xE15C;</i> <span>Delete</span></a>
                        </div>
                    </div>
                </div>
                <table class="table table-striped table-hover">
                    <thead>
                        <tr>
                            <th>ID Mahasiswa</th>
                            <th>Nim Mahasiswa</th>
                            <th>Nama Mahasiswa</th>
                            <th>Alamat Mahasiswa</th>
                            <th>Tempat Lahir</th>
                            <th>Tanggal Lahir</th>
                            <th>Jenis Kelamin</th>
                            <th>Kode Jurusan</th>
                            <th>ID Jurusan</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                                include "koneksi.php";
                                $sql = "SELECT * FROM mahasiswa inner join jurusan on mahasiswa.id_jurusan=jurusan.id_jurusan";
                                $query = mysqli_query($koneksi, $sql);
                                while ($data = mysqli_fetch_array($query)) {
                                ?>
                        <tr>
                            <td><?php echo $data['id_mahasiswa']; ?></td>
                            <td><?php echo $data['nim']; ?></td>
                            <td><?php echo $data['nama']; ?></td>
                            <td><?php echo $data['alamat']; ?></td>
                            <td><?php echo $data['tempat_lahir']; ?></td>
                            <td><?php echo $data['tanggal_lahir']; ?></td>
                            <td><?php echo $data['jenis_kelamin']; ?></td>
                            <td><?php echo $data['kode_jurusan']; ?></td>
                            <td><?php echo $data['id_jurusan']; ?></td>
                            <td>
                                <!-- <a href="tambahData_mahasiswa.php?id_mahasiswa=<?php echo $data['id_mahasiswa']; ?>" class="btn btn-primary">Tambah</a> -->
                                <a href="editData_mahasiswa.php?id_mahasiswa=<?php echo $data['id_mahasiswa']; ?>"
                                    class="edit" ><i class="material-icons" 
                                        title="Edit">&#xE254;</i></a>
                                <a href="delete_mahasiswa.php?id_mahasiswa=<?php echo $data['id_mahasiswa']; ?>"
                                    class="delete" ><i class="material-icons" 
                                        title="Delete">&#xE872;</i></a>
                            </td>
                        </tr>
                        <?php
                                }
                                ?>
                        </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>

</body>

</html>