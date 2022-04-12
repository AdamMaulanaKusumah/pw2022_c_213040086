<?php 
// // Pertemuan 5 - Array
// // Array adalah variabel yang bisa menampung atau menyimpan banyak nilai sekaligus

// $hari1 = "senin";
// $hari2 = "selasa";

// $bulan1 = "Januari";
// $bulan2 = "Februari";

// $mahasiswa1 = "Nizar";

// // Membuat Array
// $hari = ["Senin", "Selasa", "Rabu"]; // Cara Baru
// $bulan = array("Januari", "Februari", "Maret"); // Cara Lama
// $myArr = [10, "Nizar", True];

// // Mencetak ARRAY
// // Mencetak 1 elemen di dalam array, menggunakan index
// // Dimulai dari 0 (index)
// echo $hari[0];
// echo "<br>"; 
// echo $bulan[2];
// echo "<br>";
// echo $myArr[0];
// echo "<hr>";

// // Mencetak menggunakan var_dump() atau print_r()
// // Khusus untuk debugging 
// var_dump($hari);
// echo "<br>";
// print_r($bulan);
// echo "<hr>";

// // Mencetak semua isi array menggunakan looping
// // For
// For ($i = 0; $i < count($hari); $i++) {
//     echo $hari[$i];
//     echo "<br>";
// }
// echo "<hr>";

// // Foreach
// foreach($bulan as $b) {
//     echo $b;
//     echo "<br>";
// }
// echo "<hr>";

// // -> arrow 
// // => fat arrow
// foreach ($bulan as $key => $value) {
//     echo "key : $key - Value : $value"; 
//     echo "<br>";
// }

// echo "<hr>";

// // Memenaipulasi ARRAY
// // Menambah elemen baru diakhir ARRAY
// $hari[] = "Kamis";
// $hari[] = "Jum'at";
// print_r($hari);

?>


<?php 
// array
// variabel yang dapat memiliki banyak nilai
// elemen pada array boleh memiliki tipe data yang berbeda
// pasangan antara key dan value
// key-nya adalah index, yang dimulai dari 0

// membuat array
// cara lama
$hari = array("Senin", "Selasa", "Rabu");
// cara baru
$bulan = ["Januari", "Februari", "Maret"];
$arr1 = [123, "tulisan", false];

// Menampilkan Array
// var_dump() / print_r()
// var_dump($hari);
// echo "<br>";
// print_r($bulan);
// echo "<br>";

// Menampilkan 1 elemen pada array
// echo $arr1[0];
// echo "<br>";
// echo $bulan[1];

// menambahkan elemen baru pada array 
var_dump($hari);
$hari[] = "Kamis";
$hari[] = "Jumat";
echo "<br>";
var_dump($hari);

?>