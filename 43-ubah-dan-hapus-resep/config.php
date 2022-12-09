<?php
  $koneksi = mysqli_connect('localhost', 'root', '', 'share_recipes');

  function getAllRecipes()
  {
    global $koneksi;
    $query = "SELECT * FROM vw_recipes WHERE title LIKE'%%' ORDER BY id DESC";
    if( isset($_GET['search'])) :
      $search = $_GET['search'];
      $query = "SELECT * FROM vw_recipes WHERE title LIKE '%$search%' ORDER BY id DESC";
    endif;
    if( isset($_GET['category'])) :
      $category = $_GET['category'];
      if( $category != "" ) :
        $query .= " AND category_id = '$category'";
      endif;
    endif;
    $result = mysqli_query($koneksi, $query);
    $rows = [];
    while( $row = mysqli_fetch_assoc($result) ){
      $rows[] = $row;
    }
    return $rows;
  }

  function getDetailRecipe()
  {
    if( isset($_GET['id']) ) :
      $id = $_GET['id'];
      global $koneksi;
      $query = "SELECT * FROM vw_recipes WHERE id=$id";
      $result = mysqli_query($koneksi, $query);
      $row = mysqli_fetch_object($result);
      return $row;
    else :
      return null;
    endif;
  }

  function getAllCategories()
  {
    global $koneksi;
    $query = "SELECT * FROM categories";
    $result = mysqli_query($koneksi, $query);
    $rows = [];
    while( $row = mysqli_fetch_assoc($result) ){
      $rows[] = $row;
    }
    return $rows;
  }

  function addRecipe( $data )
  {
    global $koneksi;
    $title = htmlspecialchars($data['title']);
    $category_id = $data['category_id'];
    $materials = $data['materials'];
    $procedures = $data['procedures'];
    $user_id = 2;
    
    // jalankan query
    mysqli_query($koneksi, "INSERT INTO recipes VALUES (NULL, '$title' ,'$user_id', '$category_id', '$materials', '$procedures', 1)");

    if(mysqli_affected_rows($koneksi) > 0) :
      // return true kalo berhasil ditambah
      return true;
      else :
        // return false kalo gagal ditambah
      return false;
    endif;
  }

  function checkRecipe( $id )
  {
    global $koneksi;
    $query = "SELECT * FROM vw_recipes WHERE id = $id";
    $result = mysqli_query($koneksi, $query);
    $rows = [];
    while( $row = mysqli_fetch_assoc($result) ){
      $rows[] = $row;
    }
    return count($rows);
  }

  function deleteRecipe($id)
  {
    global $koneksi;
    $query = "DELETE FROM recipes WHERE id = $id";
    mysqli_query($koneksi, $query);
    if(mysqli_affected_rows($koneksi) > 0) :
      // return true kalo berhasil dihapus
      return true;
      else :
        // return false kalo gagal dihapus
      return false;
    endif;
  }
  
  function changeRecipe($data)
  {
    global $koneksi;
    $id = $data['id'];
    $title = htmlspecialchars($data['title']);
    $category_id = $data['category_id'];
    $materials = $data['materials'];
    $procedures = $data['procedures'];
    
    // jalankan query
    mysqli_query($koneksi, "UPDATE recipes SET title = '$title', category_id = '$category_id', materials = '$materials', procedures = '$procedures' WHERE id = '$id'");

    if(mysqli_affected_rows($koneksi) > 0) :
      // return true kalo berhasil ditambah
      return true;
      else :
        // return false kalo gagal ditambah
      return false;
    endif;
  }