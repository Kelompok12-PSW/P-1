<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">

    <title>Hello, world!</title>
    <style>
        .container{
            width: 30%;
            margin-top: 9%;
            box-shadow: 0 3px 20px;
            padding: 20px;
            position: fixed;
            margin-left: 35%;
        }
        /* .dosen {
            float: left;
        } */
        .mahasiswa {
            float: right;
        }
        .row {
            padding-top: 30px;
        }
    </style>
  </head>
  <body>
    <div class="container">
        <!-- judul form login -->
        <h2 class="text-center">APLIKASI MANAJEMEN UNIVERSITAS X</h2>
        <hr>
        <h2 class="text-center"><b>LOGIN</b></h2>
        <!-- <button class="dosen" type="submit"><a href="login3.php">Login Staff/Dosen</a></button>
        <button class="mahasiswa" type="submit"><a href="login2.php">Login Mahasiswa</a></button>
         -->
         <div class="row">
        <div class="col">
            <button type="text" class="btn btn-warning" placeholder="First name" aria-label="First name">
                <a href="login_dosen.php" style="color: black; padding-left: 26px; padding-right: 26px;">Login Dosen</a>
            </button>
        </div>
        <div class="col">
            <button type="password" class="btn btn-warning" placeholder="Last name" aria-label="Last name">
                <a href="login_mahasiswa.php" style="color: black; padding-left: 10px; padding-right: 10px;">Login Mahasiswa</a>
            </button>
        </div>
        </div> 
    </div>

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.1/dist/umd/popper.min.js" integrity="sha384-SR1sx49pcuLnqZUnnPwx6FCym0wLsk5JZuNx2bPPENzswTNFaQU1RDvt3wT4gWFG" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.min.js" integrity="sha384-j0CNLUeiqtyaRmlzUHCPZ+Gy5fQu0dQ6eZ/xAww941Ai1SxSY+0EQqNXNE6DZiVc" crossorigin="anonymous"></script>
    -->
  </body>
</html>