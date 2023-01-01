<?php
  session_start();

  if( !isset($_SESSION['login']) ) :
    header('Location: login.php');
    exit();die();
  endif;

  $_SESSION['login'] = NULL;
  $_SESSION['user_id'] = NULL;

  session_destroy();
  session_unset();

  header('Location: index.php');