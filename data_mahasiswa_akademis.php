<?php
    // memanggil file functions.php
    require "functions.php";

    // Sintaks query untuk mengambil data dari database
    $mahasiswa = query("SELECT * FROM mahasiswa_akademis");

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>Index</title>

    <!-- starter templete css -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <style>
        .float-sm-right {
            float: right;
            color: black;
        }
        .akun {
            float: left;
        }
    </style>

    

    <style>
    body {font-family: Arial, Helvetica, sans-serif;}

    .navbar {
    width: 100%;
    background-color: rgba(227, 241, 18, 0.938);
    overflow: auto;
    }

    .navbar a {
    float: left;
    padding: 12px;
    color: rgb(17, 16, 16);
    text-decoration: none;
    font-size: 17px;
    }

    .navbar a:hover {
    background-color: rgb(31, 128, 219);
    }

    .active {
    background-color: #e5e912;
    }


    </style>
</head>
<body>

    <div class="container">
    <!-- awal navbar -->
    <div class="navbar">
        <a class="active" href="#"><i class="fa fa-fw fa-university"></i> E-campus </a> 
        <a href="home.php"><i class="fa fa-fw fa-home"></i> Home</a> 
        <a href="modul.php"><i class="fa fa-fw fa-book"></i> Modul</a> 
        <a href="data_mahasiswa_akademis.php"><i class="fa fa-fw fa-graduation-cap"></i> Data Mahasiswa</a>
        <a href="#"><i class="fa fa-fw fa-user"></i> Data Akademik</a> 
        <a href="index.php"><i class="fa fa-fw fa-sign-out"></i> Logout</a>
    </div>
    <!-- akhir navbar -->

        <div class="row">
            <div class="mt-5">
                <h1 class="text-left">DATA MAHASISWA/AKADEMIS</h1><hr>
            </div>
        </div>
        
        <div class="row">
            <div class="col-md-6">
                <form action="">
                    <label for="kelas">Kelas</label>
                    <select name="kelas" id="kelas">
                        <option value="41trpl1">41TRPL1</option>
                        <option value="41trpl2">41TRPL2</option>
                    </select>
                </form>
            </div>
        </div>
        
        <br>

        <!-- button menambahkan data mahasiswa -->
        <div class="float-sm-right">
            <button type='button' class='btn btn-warning btn-block right-block'><a href="tambah_data.php" data-bs-toggle="tooltip" data-bs-placement="top" title="Tandai sudah selesai">Tambahkan Data</a></button>
        </div>
        <br>
        <br>

        <!-- layout website -->
        <table border="2" cellpadding="5" class="table">
            <thead>
                <tr>
                    <th scope="col">No</th>
                    <th scope="col">NIM</th>
                    <th scope="col">Nama</th>
                    <th scope="col">Angkatan</th>
                    <th scope="col">Program Studi</th>
                    <th scope="col">Kelas</th>
                    <th scope="col">Action</th>
                </tr>
            </thead>

            <?php $id = 1; ?>
            <?php foreach( $mahasiswa as $mhs) : ?>

            <thead>
                <tr>
                    <td><?= $id; ?></td>
                    <td><?= $mhs["nim"]; ?></td>
                    <td><?= $mhs["nama"]; ?></td>
                    <td><?= $mhs["angkatan"]; ?></td>
                    <td><?= $mhs["program_studi"]; ?></td>
                    <td><?= $mhs["kelas"]; ?></td>
                    <td>
                        <button typr="submit" class="btn btn-success" name="bsimpan"><a href="" data-bs-toggle="tooltip" data-bs-placement="top" title="Simpan Perubahan">Simpan</a></button>
			            <button typr="reset" class="btn btn-danger" name="breset"><a href="" data-bs-toggle="tooltip" data-bs-placement="top" title="Hapus Data">Hapus</a> </button>

                    </td>
                </tr>
            </thead>
            <?php $id++; ?>
            <?php endforeach; ?>

        </table>
    </div>

    
    <!-- Link JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>

    <script>
        var tooltipTriggerList = [].slice.call(document.querySelectorAll('[data-bs-toggle="tooltip"]'))
        var tooltipList = tooltipTriggerList.map(function (tooltipTriggerEl) {
            return new bootstrap.Tooltip(tooltipTriggerEl)
        })
    </script>
    
</body>
</html>