<?php
  require_once 'config.php';

  if( !isset($_SESSION['login']) ) :
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

  if( $recipe->user_id !== $_SESSION['user_id'] ) :
    header('Location: index.php');die();exit();
  endif;

  if(deleteRecipe($id)) :
    echo "<script>alert('Data resep berhasil dihapus.'); location.href = 'index.php';</script>";
  else :
    echo "<script>alert('Data resep gagal dihapus.'); location.href = 'index.php';</script>";
  endif;
  

