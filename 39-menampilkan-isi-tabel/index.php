<?php
  require_once 'config.php';
  $recipes = getAllRecipes();
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

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
  </body>
</html>