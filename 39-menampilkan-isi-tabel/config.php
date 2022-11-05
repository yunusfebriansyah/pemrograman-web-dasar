<?php
  $koneksi = mysqli_connect('localhost', 'root', '', 'share_recipes');

  function getRecipes() 
  {
    global $koneksi;
    $query = 'SELECT * FROM vw_recipes';
    $result = mysqli_query($koneksi, $query);
    $rows = [];
    while( $row = mysqli_fetch_assoc($result) ) :
      $rows[] = $row;
    endwhile;
    return $rows;
  }

  function getDetailRecipes() 
  {
    if(isset($_GET['id'])){
      $id = $_GET['id'];
      global $koneksi;
      $query = "SELECT * FROM vw_recipes WHERE id =$id";
      $result = mysqli_query($koneksi, $query);
      $rows = [];
      while( $row = mysqli_fetch_assoc($result) ) :
        $rows[] = $row;
      endwhile;
      return $rows[0];
    }
    return null;
  }