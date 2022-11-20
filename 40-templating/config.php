<?php
  $koneksi = mysqli_connect('localhost', 'root', '', 'share_recipes');

  function getAllRecipes()
  {
    global $koneksi;
    $query = "SELECT * FROM vw_recipes";
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
  