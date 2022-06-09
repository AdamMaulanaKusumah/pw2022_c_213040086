<?php
session_start();
require 'function.php';

if(isset($_POST['submit'])) {
    $login = login($_POST);
}

if(isset($_SESSION['submit'])) {
    header("Location: admin.php");
    exit;
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Log In</title>
    <!-- Bootsrap CSS -->
    <link rel="stylesheet" href="../assets/css/bootstrap.css">

    <!-- Custom Style CSS -->
    <link rel="stylesheet" href="../assets/css/login.css?v2">
</head>

<body>
    <section>
        <?php if(isset($login['error'])) : ?>
            <p><?= $login['pesan'] ?></p>
            <?php endif; ?>
        <form method="POST">
            <div class="text-center mb-4">
                <h2>SIGN IN</h2>
            </div>
            <div class="mb-3">
                <label for="username" class="form-label fw-semibold">Username</label>
                <input type="text" class="form-control" name="username" id="username" autocomplete="off" required>
            </div>
            <div class="mb-3">
                <label for="password" class="form-label fw-semibold">Password</label>
                <input type="password" class="form-control" name="password" id="password" required>
            </div>
            <!-- Warning Text -->
            <?php if(isset($error)) : ?>
                <p class="text-danger"><i class="fas fa-exclamation-triangle"></i> Username atau Password salah</p>
            <?php endif; ?>

            <div class="text-center">
                <button type="submit" class="btn btn-primary" name="submit">LOGIN</button>
                <P class="info-akun">Belum punya akun? Registrasi dulu <a href="registrasi.php">disini</a> Bossquu!</P>
            </div>
        </form>
    </section>


    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

</body>
</html>