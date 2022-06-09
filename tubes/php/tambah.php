<?php
    session_start();
    
    if(!isset($_SESSION["submit"])) {
        header("Location: login.php");
        exit;
    }
    
    require 'function.php';

    if(isset($_POST["tambah"])) {
        if(tambah($_POST) > 0) {
            echo "<script>
                alert('Data Berhasil ditambahkan!');
                document.location.href = 'admin.php';
            </script>";
        } else {
            echo "<script>
            alert('Data Gagal ditambahkan!');
            document.location.href = 'admin.php';
        </script>";
        }
    }
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- My CSS -->
    <link rel="stylesheet" href="../assets/css/tambah.css?v2" />

    <!-- Bootstrap css -->
    <link rel="stylesheet" href="../assets/css/bootstrap.css?v2" />
    <title>Tambah</title>
</head>

<body>
    <h1>Form Tambah Data</h1>

    <form action="" method="post" enctype="multipart/form-data">
        <div class="form-group">
            <label for="gambar">Gambar</label>
            <div>
                <input type="file" class="form-control-file gambar" name="gambar" id="gambar" onchange="previewImage()">
            </div>

            <img src="../assets/img/nophoto.png" width="120" style="display:block;" class="img-preview mt-2">
        </div>
        </div>
        <div class="form-group">
            <label for="kode">Kode</label>
            <div>
                <textarea class="form-control" name="kode" id="kode" r></textarea>
            </div>
        </div>
        <div class="form-group">
            <label for="jenis">Jenis</label>
            <div>
                <textarea class="form-control" name="jenis" id="jenis" r></textarea>
            </div>
        </div>
        <div class="form-group">
            <label for="nama">Nama</label>
            <div>
                <input type="text" class="form-control" name="nama" id="nama" >
            </div>
        </div>
        <div class="form-group">
            <label for="nama_latin">Nama Latin</label>
            <div>
                <input type="text" class="form-control" name="nama_latin" id="nama_latin" required></input>
            </div>
        </div>
        <div class="form-group">
            <label for="deskripsi">Deskripsi</label>
            <div>
                <textarea class="form-control input-textarea" name="deskripsi" id="deskripsi" required></textarea>
            </div>
        </div>
        <div class="form-group">
            <label for="kerajaan">Kerajaan</label>
            <div>
                <input class="form-control" name="kerajaan" id="kerajaan"></input>
            </div>
        </div>
        <div class="form-group">
            <label for="ordo">Ordo</label>
            <div>
                <input type="text" class="form-control" name="ordo" id="ordo"></input>
            </div>
        </div>
        <div class="form-group">
            <label for="famili">Famili</label>
            <div>
                <input type="text" class="form-control" name="famili" id="famili"></input>
            </div>
        </div>
        <div class="form-group">
            <label for="genus">Genus</label>
            <div>
                <input type="text" class="form-control" name="genus" id="genus"></input>
            </div>
        </div>
        <div class="form-group">
            <label for="spesies">Spesies</label>
            <div>
                <input type="text" class="form-control" name="spesies" id="spesies"></input>
            </div>
        </div>
        <div class="form-group">
            <label for="filum">Filum</label>
            <div>
                <input type="text" class="form-control" name="filum" id="filum"></input>
            </div>
        </div>
        <div class="form-group">
            <label for="bangsa">Bangsa</label>
            <div>
                <input type="text" class="form-control" name="bangsa" id="bangsa"></input>
            </div>
        </div>
        <div class="form-group">
            <label for="kelas">Kelas</label>
            <div>
                <input type="text" class="form-control" name="kelas" id="kelas"></input>
            </div>
        </div>
        <div class="form-btn text-center">
            <button type="submit" class="add-btn btn btn-primary btn-lg btn-block mb-1 mt-6" name="tambah">Tambah
                Data!</button>
            <br>
            <button class="btn btn-secondary btn-lg">
                <a href="admin.php" class="text-white" style="text-decoration: none; color: black;">Kembali</a>
            </button>
        </div>

    </form>

    <!-- SCRIPT JS -->
    <script src="../assets/js/script.js"></script>
</body>

</html>