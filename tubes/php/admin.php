<?php
    session_start();

    if(!isset($_SESSION["submit"])) {
        header("Location: login.php");
        exit;
    }

    // Menghubungkan dengan file PHP lainnya
    require 'function.php';

    // PAGINATION
    // Konfigurasi Flora
    // $jumlahDataFloraPerHalaman = 3;
    // $jumlahDataFlora = count(query("SELECT * FROM flora"));
    // $jumlahHalamanFlora = ceil($jumlahDataFlora / $jumlahDataFloraPerHalaman);

    // $halamanAktifFlora = (isset($_GET['halaman'])) ? $_GET['halaman'] : 1;

    // $awalDataFlora = ($jumlahDataFloraPerHalaman * $halamanAktifFlora) - $jumlahDataFloraPerHalaman;

    // if(isset($_GET['cari'])) {
    //     $keyword = $_GET['keyword'];
    //     $daftarFlora = query ("SELECT * FROM flora WHERE
    //                 nama_flora LIKE '%$keyword%' OR        
    //                 jenis LIKE '%$keyword%'");
    // } else {
    //     $daftarFlora = query ("SELECT * FROM flora LIMIT $awalDataFlora, $jumlahDataFloraPerHalaman");
    // }


    // konfigurasi Fauna
    // $jumlahDataFaunaPerHalaman = 3;
    // $jumlahDataFauna = count(query("SELECT * FROM fauna"));
    // $jumlahHalamanFauna = ceil($jumlahDataFauna / $jumlahDataFaunaPerHalaman);

    // $halamanAktifFauna = (isset($_GET['halaman'])) ? $_GET['halaman'] : 1;

    // $awalDataFauna = ($jumlahDataFaunaPerHalaman * $halamanAktifFauna) - $jumlahDataFaunaPerHalaman;

    // if(isset($_GET['cari'])) {
    //     $keyword = $_GET['keyword'];
    //     $daftarFauna = query ("SELECT * FROM fauna WHERE
    //                 nama_fauna LIKE '%$keyword%' OR        
    //                 jenis LIKE '%$keyword%'");
    // } else {
    //     $daftarFauna = query ("SELECT * FROM fauna LIMIT $awalDataFauna, $jumlahDataFaunaPerHalaman");
    // }

    // PAGINATION
    // Konfigurasi Flora dan Fauna
    $jumlahDataPerHalaman = 3;
    $jumlahData = count(query("SELECT * FROM daftar_flora_fauna"));
    $jumlahHalaman = ceil($jumlahData / $jumlahDataPerHalaman);

    $halamanAktif = (isset($_GET['halaman'])) ? $_GET['halaman'] : 1;

    $awalData = ($jumlahDataPerHalaman * $halamanAktif) - $jumlahDataPerHalaman;

    if(isset($_GET['cari'])) {
        $keyword = $_GET['keyword'];
        $daftarFloraFauna = query ("SELECT * FROM daftar_flora_fauna WHERE
                    nama LIKE '%$keyword%' OR        
                    jenis LIKE '%$keyword%' OR
                    nama_latin LIKE '%$keyword%'");
    } else {
        $daftarFloraFauna = query ("SELECT * FROM daftar_flora_fauna LIMIT $awalData, $jumlahDataPerHalaman");
    }
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- bootstrap css -->
    <link rel="stylesheet" href="../assets/css/bootstrap.css" />

    <!-- Fontawesome css -->
    <link rel="stylesheet" href="../assets/css/fontawesome_6.1.css" />

    <!-- my css -->
    <link rel="stylesheet" href="../assets/css/admin.css" />
    <title>Halaman Admin</title>
</head>

<body>
    <div class="container-lg">
        <div class="btn-cta">
            <div class="add">
                <a href="tambah.php" class="btn btn-outline-info"><i class="fas fa-plus-circle"></i> Tambah Data</a>
            </div>

            <form class="search" action="" method="get">
                <div class="form-group">
                    <input type="text" class="form-control" name="keyword" autofocus>
                    <button type="submit" class="btn btn-info" name="cari"><i class="fas fa-search"></i></button>

                </div>
            </form>

            <div class="logout">
                <a href="logout.php" class="btn btn-outline-danger"><i class="fas fa-sign-out-alt"></i> Logout</a>
            </div>
        </div>


        <section id="flora-fauna">
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>No.</th>
                    <th>Opsi</th>
                    <th>Kode</th>
                    <th>Gambar</th>
                    <th>jenis</th>
                    <th>Nama</th>
                    <th>Nama Latin</th>
                </tr>
            </thead>

            <!-- cek data di cari atau tidak -->
            <?php if (empty($daftarFloraFauna)) : ?>
            <tr>
                <td colspan="9">
                    <h1>Data tidak ditemukan</h1>
                </td>
            </tr>
            <?php else : ?>
            <?php $i = 1; ?>
            <?php foreach ($daftarFloraFauna as $floraFauna) : ?>
            <tbody>
                <tr>
                    <td>
                        <b><?= $i; ?></b>
                    </td>
                    <td>
                        <div class=" wrapper-opt-btn">
                            <a href="ubah.php?id=<?= $fkoraFauna['id']; ?>">
                                <button type="button" class="btn btn-primary btn-sm">
                                    <i class="fas fa-edit"></i><br>Ubah
                                </button>
                            </a>
                            <a href="hapus.php?id=<?= $floraFauna['id'] ?>" onclick="return confirm('Hapus Data?')">
                                <button type="button" class="btn btn-danger btn-sm">
                                    <i class="fas fa-trash-alt"></i><br>Hapus
                                </button>
                            </a>
                        </div>
                    </td>
                    <td><?= $floraFauna['kode']; ?></td>
                    <td>
                        <img src="../assets/img/flora-fauna/<?= $floraFauna["gambar"]; ?>" alt="">
                    </td>
                    <td><?= $floraFauna["jenis"]; ?></td>
                    <td><?= $floraFauna["nama"]; ?></td>
                    <td><?= $floraFauna["nama_latin"]; ?></td>
                </tr>
            </tbody>
            <?php $i++; ?>
            <?php endforeach; ?>
            <?php endif; ?>
        </table>

        <!-- NAVIGASI -->
        <nav aria-label="...">
            <ul class="pagination pagination-sm">
                <!-- Previous -->
                <?php if($halamanAktif > 1) : ?>
                <li class="page-item">
                    <a class="page-link" href="?halaman=<?= $halamanAktif - 1; ?>" aria-label="Previous">
                        <span aria-hidden="true">&laquo;</span>
                    </a>
                </li>
                <?php endif ?>


                <?php for($i = 1; $i <= $jumlahHalaman; $i++) : ?>
                <?php if ($i == $halamanAktif): ?>
                <li class="page-item active">
                    <a class="page-link" href="?halaman=<?= $i; ?>">
                        <?= $i; ?>
                    </a>
                </li>
                <?php else : ?>
                <li class="page-item">
                    <a class="page-link" href="?halaman=<?= $i; ?>">
                        <?= $i; ?>
                    </a>
                </li>
                <?php endif; ?>
                <?php endfor; ?>

                <!-- Next -->
                <?php if($halamanAktif < $jumlahHalaman) : ?>
                <li class="page-item">
                    <a class="page-link" href="?halaman=<?= $halamanAktif + 1; ?>" aria-label="Previous">
                        <span aria-hidden="true">&raquo;</span>
                    </a>
                </li>
                <?php endif; ?>
            </ul>
        </nav>
        <!-- End Navigation -->
        </section>
    </div>

    <!-- Fontawesome Js -->
    <script src="../assets/js/fontawesome_6.1.js"></script>

        <!-- Option 1: Bootstrap Bundle with Popper -->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>

</html>