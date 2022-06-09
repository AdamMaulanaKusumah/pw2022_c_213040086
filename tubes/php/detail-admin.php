<?php 
if(!isset($_GET['id'])) {
    header('location: ./index.php');
    exit ;
}
require 'function.php';



$id = $_GET['id'];

$floraFauna = query("SELECT * FROM daftar_flora_fauna WHERE id = '$id'")[0];
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Detail</title>

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="../assets/css/bootstrap.css">

    <!-- Fontawesome js -->
    <link rel="stylesheet" href="../assets/css/fontawesome_6.1.css">

    <!-- Custom Style CSS -->
    <link rel="stylesheet" href="../assets/css/detail.css?v2">
</head>
<body>
    <section>
        <div class="container">
            <div class="row mx-auto">

                <div class="text-center mb-4">
                    <h1 class="title"><?= $floraFauna['nama']; ?></h1>
                </div>
                <div class="col-sm-4 col-md-12">
                    <div class="d-flex justify-content-center">
                    <div class="card" style="width: 620px;">
                        <img src="../assets/img/flora-fauna/<?= $floraFauna["gambar"]; ?>" class="card-img-top" alt="...">
                        <div class="card-body">
                            <p class="card-description"><?= $floraFauna["deskripsi"]; ?></p>

                            <h6 class="text-center alert alert-success mt-5">Klasifikasi ilmiah</h6>
                            <div class="row">
                                <div class="col-4">
                                    <p class="fw-semibold">Kerajaan :</p>
                                </div>
                                <div class="col-8"><?= $floraFauna['kerajaan']; ?></div>
                            </div>
                            
                            <div class="row">
                                <div class="col-4">
                                    <p class="fw-semibold">Ordo :</p>
                                </div>
                                <div class="col-8"><?= $floraFauna['ordo']; ?></div>
                            </div>
                            <div class="row">
                                <div class="col-4">
                                    <p class="fw-semibold">Famili :</p>
                                </div>
                                <div class="col-8"><?= $floraFauna['famili']; ?></div>
                            </div>
                            <div class="row">
                                <div class="col-4">
                                    <p class="fw-semibold">Genus :</p>
                                </div>
                                <div class="col-8"><?= $floraFauna['genus']; ?></div>
                            </div>
                            <div class="row">
                                <div class="col-4">
                                    <p class="fw-semibold">Spesies</p>
                                </div>
                                <div class="col-8"><?= $floraFauna['spesies']; ?></div>
                            </div>
                            <div class="row">
                                <div class="col-4">
                                    <p class="fw-semibold">Filum</p>
                                </div>
                                <div class="col-8"><?= $floraFauna['filum']; ?></div>
                            </div>
                            <div class="row">
                                <div class="col-4">
                                    <p class="fw-semibold">Bangsa</p>
                                </div>
                                <div class="col-8"><?= $floraFauna['bangsa']; ?></div>
                            </div>
                            <div class="row">
                                <div class="col-4">
                                    <p class="fw-semibold">Kelas</p>
                                </div>
                                <div class="col-8"><?= $floraFauna['kelas']; ?></div>
                            </div>
                        </div>
                        <div class="card-footer">
                            <a href="ubah.php?id=<?= $floraFauna['id']; ?>" class="btn btn-warning btn-sm text-white">
                                <i class="fa-solid fa-pen-to-square"></i>
                                <br>
                                Ubah Data
                            </a>
                        </div>
                    </div>
                    </div>

                    <div class="text-center my-4">
                    <a href="admin.php" type="button" class="btn btn-secondary">Kembali</a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Fontawesome JS -->
    <script src="../assets/js/fontawesome_6.1.js"></script>

     <!-- Bootstrap JS -->
     <script src="../assets/js/bootstrap.bundle.js"></script>
</body>
</html>