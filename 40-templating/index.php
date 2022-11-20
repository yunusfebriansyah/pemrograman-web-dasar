<?php
  require_once 'config.php';
  $recipes = getAllRecipes();

  include_once 'templates/header.php';
  include_once 'templates/navbar.php';
?>

<div class="container">

  <!-- content -->
  <h1 class="my-3">Semua Resep Terbaik Untuk Kamu</h1>
  <div class="row gy-4">
    <?php foreach($recipes as $recipe) : ?>
    <div class="col-6 col-md-4 col-lg-3">
      <div class="card border-0 shadow">
        <img src="https://images.unsplash.com/photo-1546069901-ba9599a7e63c?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxzZWFyY2h8Mnx8Zm9vZHxlbnwwfHwwfHw%3D&auto=format&fit=crop&w=500&q=60" class="card-img-top" alt="<?= $recipe['title'] ?>">
        <div class="card-body">
          <h5 class="card-title"><a class="text-success text-decoration-none" href="detail.php?id=<?= $recipe['id'] ?>"><?= $recipe['title'] ?></a></h5>
          <p class="card-text mb-0">Penulis : <?= $recipe['user_name'] ?></p>
          <p class="card-text">Kategori : <?= $recipe['category_name'] ?></p>
        </div>
      </div>
    </div>
    <?php endforeach; ?>
  </div>
  <!-- end content -->
      
</div>

<?php include_once 'templates/footer.php'; ?>