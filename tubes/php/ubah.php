<?php
    // session_start();

    // if(!isset($_SESSION["username"])) {
    //      header("Location: login.php");
    //      exit;
    // }

    require 'function.php';
    // Query data teknologi berdasarkan id
    $id = $_GET['id'];
    $row = query("SELECT * FROM daftar_flora_fauna WHERE id = $id")[0];

    // cek ketika tombol ubah sudah diklik
if (isset($_POST['ubah'])) {

    // ubah data di tabel mahasiswa
    if (ubah($_POST) > 0) {
      echo "<script>
                  alert('data berhasil diubah!');
                  document.location.href = 'admin.php';
                </script>";
    } else {
      echo "data gagal diubah!";
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
            <input type="hidden" name="id" class="form-control" value="<?= $row['id']; ?>">
        </div>
        <div class="form-group">
            <div>
                <input type="hidden" class="form-control-file" name="gambar_lama" value="<?= $row['gambar']?>">
            </div>
        </div>
        <div class="form-group">
            <label for="gambar">Gambar</label>
            <div>
                <input type="file" class="form-control-file gambar" name="gambar" id="gambar" onchange="previewImage()">
            </div>

            <img src="../assets/img/<?= $row['gambar']; ?>" width="120" style="display:block;" class="img-preview mt-2">
        </div>
        </div>
        <div class="form-group">
            <label for="kode">Kode</label>
            <div>
                <input type="text" class="form-control" name="kode" id="kode" value="<?= $row['kode'];?>">
            </div>
        </div>
        <div class="form-group">
            <label for="jenis">Jenis</label>
            <div>
                <input type="text" class="form-control" name="jenis" id="jenis" value="<?= $row['jenis'];?>">
            </div>
        </div>
        <div class="form-group">
            <label for="nama">Nama</label>
            <div>
                <input type="text" class="form-control" name="nama" id="nama" value="<?= $row['nama'];?>">
            </div>
        </div>
        <div class="form-group">
            <label for="nama_latin">Nama Latin</label>
            <div>
                <input type="text" class="form-control" name="nama_latin" id="nama_latin" value="<?= $row['nama_latin'];?>">
            </div>
        </div>
        <div class="form-group">
            <label for="deskripsi">Deskripsi</label>
            <div>
                <textarea class="form-control input-textarea" name="deskripsi" id="deskripsi"><?= $row['deskripsi'];?></textarea>
            </div>
        </div>
        <div class="form-group">
            <label for="kerajaan">Kerajaan</label>
            <div>
                <input class="form-control" name="kerajaan" id="kerajaan" value="<?= $row['kerajaan'];?>">
            </div>
        </div>
        <div class="form-group">
            <label for="ordo">Ordo</label>
            <div>
                <input type="text" class="form-control" name="ordo" id="ordo" value="<?= $row['ordo'];?>">
            </div>
        </div>
        <div class="form-group">
            <label for="famili">Famili</label>
            <div>
                <input type="text" class="form-control" name="famili" id="famili" value="<?= $row['famili'];?>">
            </div>
        </div>
        <div class="form-group">
            <label for="genus">Genus</label>
            <div>
                <input type="text" class="form-control" name="genus" id="genus" value="<?= $row['genus'];?>">
            </div>
        </div>
        <div class="form-group">
            <label for="spesies">Spesies</label>
            <div>
                <input type="text" class="form-control" name="spesies" id="spesies" value="<?= $row['spesies'];?>">
            </div>
        </div>
        <div class="form-group">
            <label for="filum">Filum</label>
            <div>
                <input type="text" class="form-control" name="filum" id="filum" value="<?= $row['filum'];?>">
            </div>
        </div>
        <div class="form-group">
            <label for="bangsa">Bangsa</label>
            <div>
                <input type="text" class="form-control" name="bangsa" id="bangsa" value="<?= $row['bangsa'];?>">
            </div>
        </div>
        <div class="form-group">
            <label for="kelas">Kelas</label>
            <div>
                <input type="text" class="form-control" name="kelas" id="kelas" value="<?= $row['kelas'];?>">
            </div>
        </div>
        <div class="form-btn text-center">
            <button type="submit" class="add-btn btn btn-primary btn-lg btn-block mb-1 mt-6" name="ubah">Ubah
                Data!</button>
            <br>
            <button class="btn btn-secondary btn-lg">
                <a href="ubah.php" class="text-white" style="text-decoration: none; color: black;">Kembali</a>
            </button>
        </div>

    </form>