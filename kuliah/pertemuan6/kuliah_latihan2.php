<?php 
// Array Assosiative
// Array yang indexnya string

$mahasiswa = [
  [
    "nama" => "Nizar Al Fattan", 
    "npm" => "213040078", 
    "email" => "nizar.213040078@mail.unpas.ac.id", 
    "jurusan" => "Teknik Infirmatika"
  ],
  [
    "nama" => "Adam Maulana", 
    "npm" => "213040086", 
    "email" => "adam.213040086@mail.unpas.ac.id", 
    "jurusan" => "Teknik Informatika"
  ],
  [
    "nama" => "Muhammad Fauzan", 
    "npm" => "213040104", 
    "email" => "fauzan.213040104@mail.unpas.ac.id", 
    "jurusan" => "Teknik Informatika"
  ]
];

// var_dump($mahasiswa [0]["nama"]);
?>

<?php foreach($mahasiswa as $mhs) { ?>
<ul>
    <li>Nama : <?php echo $mhs["nama"] ?></li>
    <li>NRP : <?php echo $mhs["npm"] ?></li>
    <li>Email : <?php echo $mhs["email"] ?></li>
    <li>Jurusan : <?php echo $mhs["jurusan"] ?></li>
</ul>
<?php } ?>

<hr>

<?php foreach($mahasiswa as $mhs) { ?>
<ul>
    <?php foreach($mhs as $key => $value) { ?>
        <li><?php echo $key;  ?>: <?php echo $value; ?></li>
    <?php } ?>    
</ul> 
<?php } ?>   