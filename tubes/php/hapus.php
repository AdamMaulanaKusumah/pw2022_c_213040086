<?php
    require 'function.php';

    $id = $_GET['id'];

    if(isset($_POST["tambah"])) {
        if(tambah($_POST) > 0) {
            echo "<script>
                alert('Data Berhasil dihapus!');
                document.location.href = 'admin.php';
            </script>";
        } else {
            echo "<script>
            alert('Data Gagal dihapus!');
            document.location.href = 'admin.php';
        </script>";
        }
    }
?>