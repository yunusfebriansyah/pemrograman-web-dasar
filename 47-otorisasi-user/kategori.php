<?php
  require_once 'config.php';

  if( !is_admin() ) :
    header('Location: index.php'); die(); exit();
  endif;

  include_once 'templates/header.php';
  include_once 'templates/navbar.php';
?>

<div class="container">

  <!-- content -->
  <h1 class="my-3">Data Kategori</h1>
  <!-- end content -->
      
</div>

<?php include_once 'templates/footer.php'; ?>