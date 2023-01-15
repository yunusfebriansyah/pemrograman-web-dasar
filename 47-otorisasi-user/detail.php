<?php
  require_once 'config.php';
  $recipe = getDetailRecipe();

  include_once 'templates/header.php';
  include_once 'templates/navbar.php';
?>

<div class="container">

  <!-- content -->
  <img class="w-100 mt-3 rounded" style="object-fit: cover; height: 250px;" src="<?= $recipe->thumbnail ?>" alt="<?= $recipe->title ?>">
  <h1 class="my-3"><?= $recipe->title ?></h1>
  <?php if( is_login() and $recipe->user_id === $_SESSION['user_id'] ) : ?>
  <a href="ubah-resep.php?id=<?= $recipe->id ?>" class="btn btn-sm btn-success">Ubah</a>
  <a href="hapus-resep.php?id=<?= $recipe->id ?>" class="btn btn-sm btn-danger">hapus</a>
  <?php endif; ?>
  <h2 class="mt-3">Bahan-bahan</h2>
  <?= $recipe->materials ?>
  <h2>Cara Pembuatan</h2>
  <?= $recipe->procedures ?>
  
  <!-- end content -->
      
</div>

<?php include_once 'templates/footer.php'; ?>