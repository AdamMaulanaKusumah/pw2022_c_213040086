<?php
    session_start();
    require 'function.php';

    if(isset($_POST["register"])) {
        if(registrasi($_POST) > 0) {
            echo "<script>
                alert('Registrasi Berhasil!');
                document.location.href = 'login.php';
                </script>";
        } else {
            echo "<script>
            alert('Registrasi Gagal!');
            </script>";
        }
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>REGISTRASI</title>
    <!-- Bootsrap CSS -->
    <link rel="stylesheet" href="../assets/css/bootstrap.css">

    <!-- Custom Style CSS -->
    <link rel="stylesheet" href="../assets/css/registrasi.css?v2">
</head>

<body>
    <section>
        <form method="post">
            <div class="text-center mb-4">
                <h2>REGISTRASI</h2>
            </div>
            <div class="mb-3">
                <label for="username" class="form-label fw-semibold">Username</label>
                <input type="text" class="form-control" name="username" id="username" autocomplete="off" required>
            </div>
            <div class="mb-3">
                <label for="password" class="form-label fw-semibold">Password</label>
                <input type="password" class="form-control" name="password" id="password" required>
            </div>

            <div class="text-center">
                <button type="submit" class="btn btn-primary" name="register">REGISTER</button>
            </div>
        </form>
    </section>


    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

</body>
</html>