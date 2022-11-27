<?php
  function setActiveNavbarMenu($requestUrl)
  {
    if( $requestUrl == explode('?', $_SERVER["REQUEST_URI"])[0] ) :
      echo ' active';
    endif;
  }
?>

    <!-- navbar -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-success">
      <div class="container">
        <a class="navbar-brand" href="index.php">Bagi Resep</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
          <ul class="navbar-nav ms-auto">
            <li class="nav-item">
              <a class="nav-link <?php setActiveNavbarMenu('/belajar-php/41-search-and-filter/index.php'); setActiveNavbarMenu('/belajar-php/41-search-and-filter/'); ?>" href="index.php">Home</a>
            </li>
            <li class="nav-item">
              <a class="nav-link <?php setActiveNavbarMenu('/belajar-php/41-search-and-filter/tambah.php'); ?>" href="tambah.php">Buat Resep</a>
            </li>
            <li class="nav-item">
              <a class="nav-link <?php setActiveNavbarMenu('/belajar-php/41-search-and-filter/kategori.php'); ?>" href="kategori.php">Kategori</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>
    <!-- end navbar -->