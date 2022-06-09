<?php 
require 'php/function.php';

$daftar_flora = query("SELECT * FROM daftar_flora_fauna WHERE jenis = 'Flora'");
$daftar_fauna = query("SELECT * FROM daftar_flora_fauna WHERE jenis = 'Fauna'");

// if(isset($_GET['cari'])) {
//   $keyword = $_GET['keyword'];
//   $daftar_flora = query ("SELECT * FROM flora WHERE nama_flora LIKE '%$keyword'");
//   $daftar_fauna = query ("SELECT * FROM fauna WHERE nama_fauna LIKE '%$keyword'");
// } else {
//   // $daftar_flora = query ("SELECT * FROM flora WHERE $awalData");
//   // $daftar_fauna = query ("SELECT * FROM fauna WHERE $awalData");
// }
?>

<!doctype html>
<html lang="en">
  <head>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <!-- ICON -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.3/font/bootstrap-icons.css">

    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="assets/css/bootstrap.css">

    <!-- Custom Style CSS -->
    <link rel="stylesheet" href="assets/css/index.css?v2">

    <title>Flora dan Fauna Indonesia</title>
  </head>
  <body>

  <nav class="navbar fixed-top navbar-expand-lg navbar-light bg-light shadow">
  <div class="container">
    <a class="navbar-brand text-success fw-bold" href="#">Flora dan Fauna</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse justify-content-end" id="navbarNav">
      <form class="d-flex" method="get" role="search">
        <div class="form-group">
          <input class="form-control me-2" type="search" name="keyword" placeholder="Search" aria-label="Search" autofocus>
        </div>
      </form>

      <a class="btn-login fw-semibold text-dark shadow-sm ms-4" href="php/login.php" role="button">LOG IN </a>

      <!-- <ul class="navbar-nav">
        <li class="nav-item fw-semibold">
          <a class="nav-link fw-semibold " href="index.php">HOME</a>
        </li>
        <li class="nav-item">
          <a class="nav-link fw-semibold" href="php/flora.php">FLORA</a>
        </li>
        <li class="nav-item">
          <a class="nav-link fw-semibold" href="php/pauna.php">FAUNA</a>
        </li>        
      </ul> -->
    </div>
  </div>
</nav>
  <!-- HOME SECTION -->
  <section class="home-section">
    <div class="container">
      <div class="img-container">
        <img src="assets/img/fauna.jpg" alt="">

        <div class="profile-container">
          <img class="shadow" src="assets/img/dams.jpg" alt="">
        </div>
      </div>

      <div class="title">
        <h6><span>Ditulis oleh</span> Adam Maulana</h6>
      </div>
    </div>
  </section>

  <section class="daftar-flora mt-5">
    <div class="container">
      <div class="row">
        <div class="card p-0">
          <div class="card-header bg-success fs-5 fw-bold text-white">Daftar Flora Indonesia</div>
          <div class="card-body pb-0">
            <div class="row">

              <?php $i = 1; ?>
              <?php foreach($daftar_flora as $flora) : ?>
              <div class="col-sm-4 col-md-3 mb-4">
                <div class="card" style="">
                  <img src="assets/img/flora-fauna/<?= $flora['gambar']?>" class="card-img-top" alt="...">
                  <div class="card-body text-center">
                    <h5 class="card-title fw-bold"><?= $flora['nama']; ?></h5>
                    <h6 class="card-sub-title fw-semibold text-black-50">(<?= $flora['nama_latin']?>)</h6>
                    <a href="php/detail.php?id=<?= $flora["id"]; ?>" class="btn btn-info text-white mt-4">Lihat Detail</a>
                  </div>
                </div>
              </div>
              <?php $i++  ?>
              <?php endforeach; ?>
            
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <section class="daftar-fauna mt-5">
    <div class="container">
      <div class="row">
        <div class="card p-0">
          <div class="card-header bg-success fs-5 fw-bold text-white">Daftar Fauna Indonesia</div>
          <div class="card-body pb-0">
            <div class="row">

            <?php $i = 1;?>
            <?php foreach($daftar_fauna as $fauna): ?>
              <div class="col-sm-4 col-md-3 mb-4">
                <div class="card" style="">
                  <img src="assets/img/flora-fauna/<?= $fauna["gambar"]; ?>" class="card-img-top" alt="...">
                  <div class="card-body text-center">
                    <h5 class="card-title fw-bold"><?=$fauna['nama']?></h5>
                    <h6 class="card-sub-title fw-semibold text-black-50">(<?= $fauna['nama_latin']?>)</h6>
                    <a href="php/detail.php?id=<?= $fauna["id"]; ?>" class="btn btn-info text-white mt-4">Lihat Detail</a>
                  </div>
                </div>
              </div>
              <?php $i++ ?>
              <?php endforeach; ?>

            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- FOOTER -->
  <footer class="text-center mt-5">
    <p class="m-0 py-2 fw-semibold text-white">&copy; Copyright Adam Maulana 2022</p>
  </footer>

<!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    -->
  </body>
</html>