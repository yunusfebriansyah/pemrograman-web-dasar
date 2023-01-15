<?php
  function setActiveNavbarMenu($requestUrl)
  {
    if( $requestUrl == explode('?', $_SERVER["REQUEST_URI"])[0] ) :
      echo ' active';
    endif;
  }
?>

    <!-- navbar -->
    <nav class="navbar navbar-expand-lg navbar-light bg-light shadow">
      <div class="container">
        <a class="navbar-brand text-success" href="index.php">Bagi Resep</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
          <ul class="navbar-nav ms-auto">
            <li class="nav-item">
              <a class="nav-link <?php setActiveNavbarMenu('/belajar-php/47-otorisasi-user/index.php'); setActiveNavbarMenu('/belajar-php/47-otorisasi-user/'); ?>" href="index.php">Home</a>
            </li>
            <li class="nav-item">
              <a class="nav-link <?php setActiveNavbarMenu('/belajar-php/47-otorisasi-user/tambah.php'); ?>" href="tambah.php">Buat Resep</a>
            </li>
            <?php if( is_admin() ) : ?>
            <li class="nav-item">
              <a class="nav-link <?php setActiveNavbarMenu('/belajar-php/47-otorisasi-user/kategori.php'); ?>" href="kategori.php">Kategori</a>
            </li>
            <?php endif; ?>
            <?php if( !is_login() ) : ?>
            <li class="nav-item mx-2">
              <a class="btn btn-success py-1 my-1 px-3 rounded-pill" href="login.php">Login</a>
            </li>
            <li class="nav-item me-2">
              <a class="btn btn-success py-1 my-1 px-3 rounded-pill" href="register.php">Register</a>
            </li>
            <?php else : ?>
            <li class="nav-item">
              <a class="btn btn-danger py-1 my-1 px-3 rounded-pill" href="logout.php">Logout</a>
            </li>
            <?php endif; ?>
          </ul>
        </div>
      </div>
    </nav>
    <!-- end navbar -->