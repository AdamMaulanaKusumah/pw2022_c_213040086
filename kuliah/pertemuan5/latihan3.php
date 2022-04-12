<?php 
// Array Numerik

$mahasiswa = [
    ["Nizar Alfattan", "213040078", "Teknik Informatika", "nizar.213040078@mail.unpas.ac.id"],
    ["Adam Maulana", "213040081", "Teknik Informatika", "adam.213040081@mail.unpas.ac.id"],
    ["Syahran Akbar", "213040099", "Teknik Informatika", "syahran.213040099@mail.unpas.ac.id"]
];

?>
<!DOCTYPE html>
<html>
<head>
    <title>Daftar Mahasiswa</title>
</head>
<body>

<h1>Daftar Mahasiswa</h1>
 
<?php foreach( $mahasiswa as $mhs ) : ?>
<ul>
    <li>Nama : <?= $mhs[0]; ?></li>
    <li>NRP : <?= $mhs[1]; ?></li>
    <li>Jurusan : <?= $mhs[2]; ?></li>
    <li>Email : <?= $mhs[3]; ?></li> 
</ul>
<?php endforeach; ?>

</body>
</html>