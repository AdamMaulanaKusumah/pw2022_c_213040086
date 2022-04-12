<?php
// // Array multidimensi
// // Array didalam Array

// $mahasiswa = [
//     ["Nizar Al Fattan", "213040078", "nizar.213040078@mail.unpas.ac.id", "Teknik Informatika"], 
//     ["Adam Maulana", "213040086", [1,[2],3], "adam.213040086@mail.unpas.ac.id", "Teknik Informatika"]
// ];
// echo $mahasiswa[1][2][1][0]; // 2

?>


<?php 
// Pengulangan pada array
// for / foreach
$angka = [3,2,15,20,11,88,1,45];
?>
<!DOCTYPE html>
<html>
<head>
    <title>Latihan 2</title>
    <style>
        .kotak {
            width: 50px;
            height: 50px;
            background-color: salmon;
            text-align: center;
            line-height: 50px;
            margin: 3px;
            float: left;
        }
        .clear { clear: both; }
    </style>
</head>
<body>

<?php for( $i = 0; $i < count($angka); $i++ ) { ?>
    <div class="kotak"><?php echo $angka[$i]; ?></div>
<?php } ?>

<div class="clear"></div>

<?php foreach( $angka as $a ) { ?>
    <div class="kotak"><?php echo $a; ?></div>
<?php } ?>

<div class="clear"></div>

<?php foreach( $angka as $a ) : ?>
    <div class="kotak"><?= $a; ?></div>
<?php endforeach; ?>

</body>
</html>