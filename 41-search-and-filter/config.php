<?php
  $koneksi = mysqli_connect('localhost', 'root', '', 'share_recipes');

  function getAllRecipes()
  {
    global $koneksi;
    $query = "SELECT * FROM vw_recipes WHERE title LIKE'%%'";
    if( isset($_GET['search'])) :
      $search = $_GET['search'];
      $query = "SELECT * FROM vw_recipes WHERE title LIKE '%$search%'";
    endif;
    if( isset($_GET['category'])) :
      $category = $_GET['category'];
      $query .= " AND category_id = '$category'";
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
  