<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>PHP Tags</title>
</head>
<body>

  <?php
    $namaLengkap = "Yunus Febriansyah";
    $profesi = "Pengangguran";
  ?>

  <h1>Data Diri</h1>
  <p>Nama : <?= $namaLengkap; ?></p>
  <p>Profesi : <?= $profesi; ?></p>

  <?php
  // php ya php, html ya html
    if( $profesi == "Pengangguran" ) :
  ?>
  <p>Kok Masih nganggur?</p>
  <?php
  else :
  ?>
  <p>Kerjanya ngapain?</p>
  <?php endif; ?>

  <?php
  // versi full php
    if( $profesi == "Pengangguran" ) :
      echo "<p>Kok Masih nganggur?</p>";
    else :
      echo "<p>Kerjanya ngapain?</p>";
    endif;
  ?>

  <h2 class="heading-2">Judul 2</h2>
  <h2 class="<?= 'heading-2' ?>">Judul 2</h2>



</body>
</html>