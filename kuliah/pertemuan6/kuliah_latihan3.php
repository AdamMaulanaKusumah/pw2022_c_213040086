<?php 
$mahasiswa = [
    [
      "nama" => "Nizar Al Fattan", 
      "npm" => "213040078", 
      "email" => "nizar.213040078@mail.unpas.ac.id", 
      "jurusan" => "Teknik Infirmatika",
      "gambar" => "adam.jpeg"
    ],
    [
      "nama" => "Adam Maulana", 
      "npm" => "213040086", 
      "email" => "adam.213040086@mail.unpas.ac.id", 
      "jurusan" => "Teknik Informatika",
      "gambar" => "adam2.jpeg"
    ],
    [
      "nama" => "Muhammad Fauzan", 
      "npm" => "213040104", 
      "email" => "fauzan.213040104@mail.unpas.ac.id", 
      "jurusan" => "Teknik Informatika",
      "gambar" => "adam3.jpeg"
    ]
  ];
?>

<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>Daftar Mahasiswa</title>
  </head>
  <body>
    <div class="container">
        <h1>Daftar Mahasiswa</h1>

        <table class="table">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Gambar</th>
      <th scope="col">Nama</th>
      <th scope="col">NPM</th>
      <th scope="col">Email</th>
      <th scope="col">Jurusan</th>
      <th scope="col">Aksi</th>
    </tr>
    </tr>
  </thead>
  <tbody>
  <?php foreach($mahasiswa as $mhs) { ?>
              <tr>
                <td scope="row">1</td>
                <td>
	 	              	<img src="img/<?php echo $mhs['gambar'] ?>" class = "rounded-circle" height = "50px" >
                </td>
                <td><?php echo $mhs['nama'] ?></td>
                <td><?php echo $mhs['npm'] ?></td>
                <td><?php echo $mhs['email'] ?></td>
                <td><?php echo $mhs['jurusan'] ?></td>
                <td>
                  <a href="#" class="btn btn-sm text-white bg-warning">Edit</a>
                  <a href="#" class="btn btn-sm text-white bg-danger">Delete</a>
                </td>
              </tr>
              <?php } ?>
  </tbody>
</table>
    </div>

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    -->
  </body>
</html>
