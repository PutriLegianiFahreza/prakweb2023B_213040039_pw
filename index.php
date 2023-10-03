<?php 

//koneksi ke database
$conn = mysqli_connect("localhost", "root", "", "prakweb2023b_213040039");

$result = mysqli_query($conn, "SELECT * FROM buku");
// var_dump($result);
// if( !$result) {
//   echo mysqli_error($conn);
// }
//mysqli_fetch_row()

// while ( $buku = mysqli_fetch_array($result)){
// var_dump($buku);
// }

?>


<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Perpustakaan Online</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="css/style.css">
  </head>
  <header>
  <nav class="navbar bg-body-tertiary">
  <form class="container-fluid justify-content-start">
    <button class="btn btn-outline-success me-2" type="button">Bacaan</button>
    <div class="info">
    <a href="daftarbuku" class="btn btn-primary">informasi</a>
    </div>
  </form>
</nav>

<h1>Selamat Datang di perpustakaan online!</h1>

<div class="card" style="width: 18rem;">
  <img src="img/almond.jpg" class="card-img-top" alt="...">
  <div class="card-body">
    <h5 class="card-title">Almond</h5>
    <a href="#" class="btn btn-primary">Baca</a>
  </div>
  <div class="card" style="width: 18rem;">
  <img src="img/hujan.jpg" class="card-img-top" alt="...">
  <div class="card-body">
    <h5 class="card-title">hujan</h5>
    <a href="#" class="btn btn-primary">Baca</a>
  </div>
</div>
<div class="card" style="width: 18rem;">
  <img src="img/Bumi.jpg" class="card-img-top" alt="...">
  <div class="card-body">
    <h5 class="card-title">Bumi</h5>
    <a href="#" class="btn btn-primary">Baca</a>
  </div>
  <div class="card" style="width: 18rem;">
  <img src="img/bumimnusia.jpg" class="card-img-top" alt="...">
  <div class="card-body">
    <h5 class="card-title">Bumi Manusia</h5>
    <a href="#" class="btn btn-primary">Baca</a>
  </div>
  <div class="card" style="width: 18rem;">
  <img src="img/Laskarpelangi.jpg" class="card-img-top" alt="...">
  <div class="card-body">
    <h5 class="card-title">Laskar Pelangi</h5>
    <a href="#" class="btn btn-primary">Baca</a>
  </div>
  <div class="card" style="width: 18rem;">
  <img src="img/lautbercerita.jpg" class="card-img-top" alt="...">
  <div class="card-body">
    <h5 class="card-title">Laut Bercerita</h5>
    <a href="#" class="btn btn-primary">Baca</a>
  </div>
  <div class="card" style="width: 18rem;">
  <img src="img/perahukertas.jpg" class="card-img-top" alt="...">
  <div class="card-body">
    <h5 class="card-title">Perahu Kertas</h5>
    <a href="#" class="btn btn-primary">Baca</a>
  </div>
  <div class="card" style="width: 18rem;">
  <img src="img/pulang.jpg" class="card-img-top" alt="...">
  <div class="card-body">
    <h5 class="card-title">pulang</h5>
    <a href="#" class="btn btn-primary">Baca</a>
  </div>
  <div class="card" style="width: 18rem;">
  <img src="img/rindu.jpg" class="card-img-top" alt="...">
  <div class="card-body">
    <h5 class="card-title">Rindu</h5>
    <a href="#" class="btn btn-primary">Baca</a>
  </div>
  <div class="card" style="width: 18rem;">
  <img src="img/TenggelamnyaKapalVanderWijck.jpg" class="card-img-top" alt="...">
  <div class="card-body">
    <h5 class="card-title">Tenggelamnya Kapal Vander Wijck</h5>
    <a href="#" class="btn btn-primary">Baca</a>
  </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
   
</header>
<br>
<br>
<body>
<h3>informasi mengenai Buku</h3>
   <div class = "daftarbuku">
    <table border="1" cellpadding="10" cellspacing="0">
    <tr>
      <td>ID buku</td>
      <td>Gambar</td>
      <td>Judul Buku</td>
      <td>Penerbit</td>
      <td>Tahun Terbit</td>
      <td>Penulis</td>
    </tr>
    <?php $i = 1; ?>
    <?php  while( $row = mysqli_fetch_assoc($result)) :?>
    <tr>
      <td> <?= $i; ?></td>
      <td><img src="img/<?php echo $row["Gambar"]; ?>" width="50"></td>
      <td><?= $row["judul_buku"]; ?></td>
      <td><?= $row["penerbit"]; ?></td>
      <td><?= $row["tahun_terbit"]; ?></td>
      <td><?= $row["penulis"]; ?></td>
    </tr>
    <?php $i++; ?>
      <?php endwhile; ?>
    </table>
   </div>
  </body>
</html>