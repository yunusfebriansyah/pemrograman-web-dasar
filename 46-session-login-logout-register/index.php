<?php
  require_once 'config.php';
  $recipes = getAllRecipes();
  $categories = getAllCategories();
  $search = isset( $_GET['search'] ) ? $_GET['search'] : null;
  $categoryId = isset( $_GET['category'] ) ? $_GET['category'] : null;
  include_once 'templates/header.php';
  include_once 'templates/navbar.php';
?>

<div class="container">

  <!-- content -->
  <h1 class="my-3">Semua Resep Terbaik Untuk Kamu</h1>
  <form action="index.php" method="GET">
    <div class="row gy-2 gx-2">

      <div class="col-12 col-md-6 col-lg-6">
        <select class="form-select form-select-sm" name="category">
          <option value="">-- Pilih Kategori --</option>
          <?php foreach( $categories as $category ) : ?>
          <option value="<?= $category['id'] ?>" <?php if($category['id'] == $categoryId): echo ' selected'; endif;  ?>><?= $category['name'] ?></option>
          <?php endforeach; ?>
        </select>
      </div>
      <div class="col-12 col-md-6 col-lg-6">
        <div class="input-group input-group-sm mb-3">
          <input name="search" type="text" class="form-control" placeholder="Cari resep yang kamu mau" value="<?= $search ?>">
          <button class="btn btn-success" type="submit"><i class="fa-solid fa-magnifying-glass"></i></button>
        </div>
      </div>
      
    </div>
  </form>
  <div class="row gy-4">
    <?php foreach($recipes as $recipe) : ?>
    <div class="col-6 col-md-4 col-lg-3">
      <div class="card border-0 shadow">
        <img src="<?= $recipe['thumbnail'] ?>" class="card-img-top" alt="<?= $recipe['title'] ?>">
        <div class="card-body">
          <h5 class="card-title"><a class="text-success text-decoration-none" href="detail.php?id=<?= $recipe['id'] ?>"><?= $recipe['title'] ?></a></h5>
          <p class="card-text mb-0">Penulis : <?= $recipe['user_name'] ?></p>
          <p class="card-text">Kategori : <?= $recipe['category_name'] ?></p>
          <?php if(is_login()) : ?>
          <a href="ubah-resep.php?id=<?= $recipe['id'] ?>" class="btn btn-sm btn-success">Ubah</a>
          <a href="hapus-resep.php?id=<?= $recipe['id'] ?>" class="btn btn-sm btn-danger">hapus</a>
          <?php endif; ?>
        </div>
      </div>
    </div>
    <?php endforeach; ?>
  </div>
  <!-- end content -->
      
</div>

<?php include_once 'templates/footer.php'; ?>