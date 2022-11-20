<?php
  require_once 'config.php';
  $recipe = getDetailRecipe();

  include_once 'templates/header.php';
  include_once 'templates/navbar.php';
?>

<div class="container">

  <!-- content -->
  <img class="w-100 mt-3 rounded" style="object-fit: cover; height: 250px;" src="https://images.unsplash.com/photo-1546069901-ba9599a7e63c?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxzZWFyY2h8Mnx8Zm9vZHxlbnwwfHwwfHw%3D&auto=format&fit=crop&w=500&q=60" alt="<?= $recipe->title ?>">
  <h1 class="my-3"><?= $recipe->title ?></h1>
  <h2>Bahan-bahan</h2>
  <?= $recipe->materials ?>
  <h2>Cara Pembuatan</h2>
  <?= $recipe->procedures ?>
  
  <!-- end content -->
      
</div>

<?php include_once 'templates/footer.php'; ?>