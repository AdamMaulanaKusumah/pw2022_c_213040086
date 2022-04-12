<?php 
// Array Numerik
// Array yang index nya ber asosiasi / berpasangan dengan angka

$mahasiswa = [
    ["Nizar Al Fattan", "213040078", "nizar.213040078@mail.unpas.ac.id", "Teknik Infirmatika"],
    ["Adam Maulana", "213040086", "adam.213040086@mail.unpas.ac.id", "Teknik Informatika"],
    ["Muhammad Fauzan", "213040104", "fauzan.213040104@mail.unpas.ac.id", "Teknik Informatika"]
];

// var_dump($mahasiswa[1][3]);
?>

<?php foreach($mahasiswa as $mhs) { ?>
<ul>
    <li>Nama : <?php echo $mhs[0] ?></li>
    <li>NRP : <?php echo $mhs[1] ?></li>
    <li>Email : <?php echo $mhs[2] ?></li>
    <li>Jurusan : <?php echo $mhs[3] ?></li>
</ul>
<?php } ?>