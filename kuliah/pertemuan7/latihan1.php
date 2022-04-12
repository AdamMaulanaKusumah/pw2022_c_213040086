<?php 
// Variabel Scope / Lingkup Variabel
// $x = 10;

// function tampilx() {
//     global $x;
//     echo $x;
// }

// tampilx();

// SUPERGLOBALS
// Variabel global milik PHP
// Merupakan Array Associative
// $_GET , $_POST , $_SESSION , $_COOKIE , $_REQUEST , $_SERVER , $_ENV
// var_dump($_SERVER);
// 

// $_GET
// $_GET["nama"] = "Adam Maulana";
// $_GET["nrp"] = 213040086;
// var_dump($_GET);
$mahasiswa = [
    [
      "nama" => "Nizar Al Fattan", 
      "nrp" => "213040078", 
      "email" => "nizar.213040078@mail.unpas.ac.id", 
      "jurusan" => "Teknik Infirmatika",
      "gambar" => "adam.jpeg"
    ],
    [
      "nama" => "Adam Maulana", 
      "nrp" => "213040086", 
      "email" => "adam.213040086@mail.unpas.ac.id", 
      "jurusan" => "Teknik Informatika",
      "gambar" => "adam2.jpeg"
    ]
  ];

?>

<!DOCTYPE html>
<html>
<head>
    <title>GET</title>
</head>
<body>
    <h1>Daftar Mahasiswa</h1>
    <ul>
    <?php foreach( $mahasiswa as $mhs ) : ?>
        <li>
            <a href="latihan2.php?nama=<?= $mhs["nama"]; ?>&nrp=<?= $mhs["nrp"]; ?>&email=<?= $mhs["email"]; ?>&jurusan=<?= $mhs["jurusan"]; ?>&gambar=<?= $mhs["gambar"]; ?>"><?= $mhs["nama"]; ?></a>
        </li>
    <?php endforeach; ?>  
    </ul>

</body>
</html>