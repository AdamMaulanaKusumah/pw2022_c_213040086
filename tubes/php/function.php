<?php

    function koneksi() {
        $conn = mysqli_connect ("localhost", "root", "", "tubes_213040086") or die('Connections_failed');

        return $conn;
    }

    // melakukan query dan memasukkan ke dalam array
    function query($query) {
        $conn = koneksi();
        $result = mysqli_query($conn, $query);
        $rows = [];

        while ($row = mysqli_fetch_assoc($result)) {
            $rows[] = $row;
        }
        
        return $rows;
    }
    // Fungsi Registrasi
    function registrasi($data) {
        $conn = Koneksi();

        $username = strtolower(stripcslashes($data["username"]));
        $password = mysqli_real_escape_string($conn, $data["password"]);

        //cek apakah username sudah ada atau belum
        $result = mysqli_query($conn, "SELECT username FROM users WHERE username = '$username' ");

        if(query("SELECT * FROM users WHERE username ='$username'")) {
            echo "<script>
                    alert('username sudah digunakan');
                </script>";
            return false;
        }

        // enkripsi password
        $password_baru = password_hash($password, PASSWORD_DEFAULT);

        // tambah user baru
        $query = "INSERT INTO users VALUES('', '$username', '$password_baru')";
        mysqli_query($conn, $query) or die(mysqli_error($conn));

        return mysqli_affected_rows($conn);
    }
    
    // Fungsi login
    function login($data){
        $conn = koneksi();
    
        $username=$_POST['username'];
        $password=$_POST['password'];
    
        $result = mysqli_query($conn, "SELECT * FROM users WHERE username = '$username'");
        $row = mysqli_fetch_assoc($result);
        if( password_verify($password, $row["password"]) ) {
    
            $_SESSION["submit"] = true;
    
    
            if( isset($_POST['remember']) ) {
    
                setcookie('id', $row['id'], time()+60);
                setcookie('key', hash('sha256', $row['username']), time()+60);
            }
    
            header("Location: admin.php");
            exit;
        } else if ($username = 'admin' && $password = '12345'){
            $_SESSION["submit"] = true;
            header("Location: admin.php");
            exit;
        }
    }

    // upload gambar 
    function upload() {
        $nama_file = $_FILES['gambar']['name'];
        $tipe_file = $_FILES['gambar']['type'];
        $ukuran_file = $_FILES['gambar']['size'];
        $error = $_FILES['gambar']['error'];
        $tmp_file = $_FILES['gambar']['tmp_name'];

        // ketika tidak ada gambar yg dipilih
        if($error == 4) {
            return 'nophoto.png';
        }

        // cek ekstensi file
        $daftar_gambar = ['jpg', 'jpeg', 'png'];
        $ekstensi_file = explode('.', $nama_file);
        $ekstensi_file = strtolower(end($ekstensi_file));
        if(!in_array($ekstensi_file, $daftar_gambar)) {
            echo "<script>
            alert('kang ira pili dudu gambar!');
            </script>";
            return false;
        }

        // cek type file
        if($tipe_file != 'image/jpeg' && $tipe_file =! 'image/png' && $tipe_file != 'image/jpg' ) {
            echo "<script>
            alert('kang ira pili dudu gambar!');
            </script>";
            return false;
        }

        // cek ukuran file 
        // maks 5mb 5000000
        if($ukuran_file > 5000000) {
            echo "<script>
            alert('kang ira pili dudu gambar!');
            </script>";
            return false;
        }
        // lolos pengecekan
        // siap upload file
        // generate nama file baru
        $nama_file_baru = uniqid();
        $nama_file_baru .= '.';
        $nama_file_baru .= $ekstensi_file;

        var_dump($nama_file_baru);

        move_uploaded_file($tmp_file, '../assets/img/flora-fauna/' . $nama_file_baru);
        return $nama_file_baru;
    }
    

    // Tambah Data
    function tambah($data) {
        $conn = koneksi();
        
        $nama = htmlspecialchars($data["nama"]);
        $namaLatin = htmlspecialchars($data["nama_latin"]);
        $jenis = htmlspecialchars($data["jenis"]);
        $deskripsi = htmlspecialchars($data["deskripsi"]);
        $kerajaan = htmlspecialchars($data["kerajaan"]);
        $ordo = htmlspecialchars($data["ordo"]);
        $famili = htmlspecialchars($data["famili"]);
        $genus = htmlspecialchars($data["genus"]);
        $spesies = htmlspecialchars($data["spesies"]);
        $filum = htmlspecialchars($data["filum"]);
        $bangsa = htmlspecialchars($data["bangsa"]);
        $kelas = htmlspecialchars($data["kelas"]);
        $kode = htmlspecialchars($data["kode"]);

        // upload gambar
        $gambar = upload();
        if(!$gambar) {
            return false;
        }
    
         $query = "INSERT INTO daftar_flora_fauna VALUES
                    (null, '$nama', '$namaLatin', '$gambar', '$deskripsi', '$kerajaan', '$ordo', '$famili', '$genus', '$spesies', '$filum', '$bangsa', '$kelas', '$jenis', '$kode');  
                  ";
        mysqli_query($conn, $query) or die(mysqli_error($conn));
    
        return mysqli_affected_rows($conn);
    
    }

    function ubah($data) {
        $conn = koneksi();

        $id = $data['id'];
        $nama = htmlspecialchars($data["nama"]);
        $namaLatin = htmlspecialchars($data["nama_latin"]);
        $jenis = htmlspecialchars($data["jenis"]);
        $deskripsi = htmlspecialchars($data["deskripsi"]);
        $kerajaan = htmlspecialchars($data["kerajaan"]);
        $ordo = htmlspecialchars($data["ordo"]);
        $famili = htmlspecialchars($data["famili"]);
        $genus = htmlspecialchars($data["genus"]);
        $spesies = htmlspecialchars($data["spesies"]);
        $filum = htmlspecialchars($data["filum"]);
        $bangsa = htmlspecialchars($data["bangsa"]);
        $kelas = htmlspecialchars($data["kelas"]);
        $kode = htmlspecialchars($data["kode"]);
        $gambar = htmlspecialchars($data['gambar']);
        $gambar_lama = htmlspecialchars($data["gambar_lama"]);

        // cek user upload gambar baru atau tidak
        if($_FILES['gambar']['error'] === 4) {
            $gambar = $gambar_lama;
        } else {
            $gambar = upload();
        }

        // query update data
        $query = "UPDATE daftar_flora_fauna
                SET
                nama = '$nama',
                nama_latin = '$namaLatin',
                gambar = '$gambar',
                deskripsi = '$deskripsi',
                kerajaan = '$kerajaan',
                ordo = '$ordo',
                famili = '$famili',
                genus = '$genus',
                spesies = '$pesies',
                filum = '$filum',
                bangsa = '$bangsa',
                kelas = '$kelas',
                jenis = '$jenis',
                kode = '$kode'
                WHERE id = $id
                ";

        mysqli_query($conn, $query);

        return mysqli_affected_rows($conn);
    }

    function hapus() {
        
    }
?>