<?php
  require_once 'config.php';

  if( !is_login() ) :
    header('Location: login.php');
    exit();die();
  endif;

  $id = isset($_GET['id']) ? $_GET['id'] : null;
  if( $id == null ) :
    header('HTTP/1.1 403 Forbidden');die();
  endif;

  if( checkRecipe($id) > 1 or checkRecipe($id) < 1 ) :
    header('HTTP/1.1 403 Forbidden');die();
  endif;

  if( isset($_POST['submit']) ) :
    if(changeRecipe($_POST)) :
      // berhasil
      echo "<script>
            alert('Resep kamu berhasil diubah');
            location.href = 'index.php';
          </script>";
    else :
      // gagal
      echo "<script>
            alert('Resep kamu gagal diubah');
            location.href = 'index.php';
          </script>";
    endif;
  endif;

  $categories = getAllCategories();
  $recipe = getDetailRecipe();

  if( $recipe->user_id !== $_SESSION['user_id'] ) :
    header('Location: index.php');die();exit();
  endif;

  include_once 'templates/header.php';
  include_once 'templates/navbar.php';
?>

<div class="container">

  <!-- content -->
  <h1 class="my-3">Ubah Data Resep Kamu</h1>

  <form action="" method="POST" enctype="multipart/form-data">
    <input type="hidden" name="id" value="<?= $recipe->id ?>">
    <div class="row">
      <div class="col-12 col-md-8 col-lg-7">
        <div class="mb-3">
          <label for="title" class="form-label">Judul Resep</label>
          <input type="text" class="form-control" id="title" placeholder="Isi judul resep" name="title" value="<?= $recipe->title ?>">
        </div>
        <div class="mb-3">
          <label for="category_id" class="form-label">Pilih Kategori</label>
          <select class="form-select" name="category_id" id="category_id">
            <?php foreach( $categories as $category ) : ?>
            <option value="<?= $category['id'] ?>" <?php if( $category['id'] == $recipe->category_id): echo 'selected'; else: echo ''; endif; ?>><?= $category['name'] ?></option>
            <?php endforeach; ?>
          </select>
        </div>
        <div class="mb-3">
          <label for="materials" class="form-label">Bahan-bahan</label>
          <textarea id="materials" name="materials"><?= $recipe->materials ?></textarea>
        </div>
        <div class="mb-3">
          <label for="procedures" class="form-label">Cara Pembuatan</label>
          <textarea id="procedures" name="procedures"><?= $recipe->procedures ?></textarea>
        </div>
        <div class="mb-3">
          <label for="thumbnail" class="form-label mb-0">Foto Thumbnail</label>
          <p class="mb-2 text-success"><small>kosongkan jika tidak ingin mengganti thumbnail</small></p>
          <img src="<?= $recipe->thumbnail ?>" alt="<?= $recipe->title ?>" style="height: 150px;" class="d-block mb-3 rounded">
          <input type="file" name="thumbnail" id="thumbnail" class="form-control">
        </div>
        <div class="mb-3">
          <button type="submit" class="btn btn-success" name="submit">Ubah Resep</button>
        </div>
      </div>
    </div>
  </form>

  <!-- end content -->
      
</div>

<script src="https://cdn.ckeditor.com/ckeditor5/35.3.2/classic/ckeditor.js"></script>
<script>
  function createCKEditor(element)
  {
    ClassicEditor
    .create( element, {
        toolbar: [ 'heading', '|', 'bold', 'italic', 'bulletedList', 'numberedList' ],
        heading: {
            options: [
                { model: 'paragraph', title: 'Paragraph', class: 'ck-heading_paragraph' },
                { model: 'heading1', view: 'h1', title: 'Heading 1', class: 'ck-heading_heading1' },
                { model: 'heading2', view: 'h2', title: 'Heading 2', class: 'ck-heading_heading2' }
            ]
        }
    } )
    .catch( error => {
        console.error( error );
    } );
  }
  createCKEditor(document.querySelector( '#materials' ));
  createCKEditor(document.querySelector( '#procedures' ));
</script>
<?php include_once 'templates/footer.php'; ?>