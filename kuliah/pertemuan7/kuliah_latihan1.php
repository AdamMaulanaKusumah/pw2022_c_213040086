<?php 
// SUPERGLOBALS
// Variabel milik PHP yang bisa kita gunakan
// Bentuknya Array Associative
// $_GET
// $_POST
// $_SERVER
// $_GET["nama"] = "Adam";
// $_GET["email"] = "Adam.213040868@mail.unpas.ac.id";

// var_dump($_GET);
// var_dump($_POST);
if(isset($_GET["nama"])) {
    $nama = $_GET["nama"];
} else {
    $nama = 'Tidak Diketahui!';
}
?>

<h1>Halo, <?= $nama; ?></h1>
<ul>
    <li>
        <a href="kuliah_latihan1.php? nama=Adam">Adam</a>
    </li>
    <li>
        <a href="?nama=Adam">Adam</a>
    </li>
</ul>