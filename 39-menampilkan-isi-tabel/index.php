<?php
  require_once 'config.php';
  $recipes = getRecipes();
?>

<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Semua Resep Terbaik Untuk Kamu</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
  </head>
  <body>
    <!-- navbar -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-success">
      <div class="container">
        <a class="navbar-brand" href="#">Bagi Resep</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
          <ul class="navbar-nav ms-auto">
            <li class="nav-item">
              <a class="nav-link active" href="index.php">Home</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>
    <!-- end navbar -->
    <div class="container">

      <!-- content -->
      <h1>Semua Resep Terbaik Untuk Kamu</h1>

      <div class="row">
        <?php foreach ($recipes as $recipe) : ?>
        <div class="col-6 col-md-4 col-lg-3 gy-4">
          <div class="card">
            <img src="https://images.unsplash.com/photo-1546069901-ba9599a7e63c?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=880&q=80" class="card-img-top" alt="Kuliner">
            <div class="card-body">
              <h2 class="card-title h4 text-success"><a href="detail.php?id=<?= $recipe['id'] ?>" class="text-success text-decoration-none"><?= $recipe['title'] ?></a></h2>
              <p class="card-text mb-1">Penulis : <?= $recipe['user_name'] ?></p>
              <p class="card-text">Kategori : <?= $recipe['category_name'] ?></p>
            </div>
          </div>
        </div>
        <?php endforeach; ?>
      </div>
      
      <!-- end content -->
      
    </div>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
  </body>
</html>
