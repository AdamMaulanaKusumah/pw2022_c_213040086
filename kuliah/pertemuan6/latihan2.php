<?php
// $mahasiswa = [
//     ["Nizar Al Fattan", "213040078", "nizar.213040078@mail.unpas.ac.id", "Teknik Infirmatika"],
//     ["Adam Maulana", "213040086", "adam.213040086@mail.unpas.ac.id", "Teknik Informatika"]
// ];

// Array Associative
// definisinya sama seperti array numerik, kecuali
// key-nya adalah string yang kita buat sendiri
// $mahasiswa = [
//     [
//         "nama" => "Nizar Al Fattan", 
//         "nrp" => "213040078", 
//         "email" => "nizar.213040078@mail.unpas.ac.id", 
//         "jurusan" => "Teknik Infirmatika",
//         "gambar" => "adam.jpeg"
//     ],
//     [
//         "nama" => "Adam Maulana", 
//         "nrp" => "213040086", 
//         "email" => "adam.213040086@mail.unpas.ac.id", 
//         "jurusan" => "Teknik Informatika",
//         "gambar" => "adam2.jpeg"
//     ]
// ];

?>

<!-- <!DOCTYPE html>
<html>
<head>
    <title>Daftar Mahasiswa</title>
</head>
<body>
    <h1>Daftar Mahasiswa</h1>

    <?php foreach( $mahasiswa as $mhs ) : ?>
        <ul>
            <li>
                <img src="img/<?= $mhs["gambar"]; ?>" height = "50px">
            </li>
            <li>Nama : <?= $mhs["nama"]; ?></li>
            <li>NRP : <?= $mhs["nrp"]; ?></li>
            <li>Jurusan : <?= $mhs["jurusan"]; ?></li>
            <li>Email : <?= $mhs["email"]; ?></li>
        </ul>
    <?php endforeach; ?>
    
</body>
</html> -->


<?php 
$sepatu = [
	[
        "merk" => "Nike",
        "jenis" => "Dior x Air Jordan 1", 
        "warna" => "Grey & White",
        "harga" => "90 juta", 
	    "gambar" => "Nike.jpg"
    ], 
    [
        "merk" => "Adidas",
        "jenis" => "Yeezy Boost 350 V2", 
        "warna" => "Full Black",
        "harga" => "6 juta", 
		"gambar" => "Adidas.jpg"
    ]
];

?>

 <!DOCTYPE html>
 <html>
 <head>
 	<meta charset="utf-8">
 	<meta name="viewport" content="width=device-width, initial-scale=1">
 	<title>Daftar Sepatu</title>
 </head>
 <body>
 	<h1>Daftar Sepatu</h1>
 
	<?php foreach($sepatu as $spt) : ?>
	 <ul>
	 	<li>
	 		<img src="img/<?php echo $spt["gambar"]; ?>" height = "200px">
	 	</li>
	 	<li>Merk : <?php echo $spt["merk"]; ?></li>
	 	<li>Jenis : <?php echo $spt["jenis"] ?></li>
	 	<li>Warna : <?php echo $spt["warna"] ?></li>
	 	<li>Harga : <?php echo $spt["harga"] ?></li>
	 </ul>
	 <?php endforeach ?>

 </body>
 </html>


