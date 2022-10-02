<?php
  // PHP mendukung satu operator kontrol kesalahan. ditandai dengan @ sebelum eksekusi
  /* Intentional file error */
  $my_file = @file ('data22.txt') or
  die ("Failed opening file: error was '" . error_get_last()['message'] . "'");

  // menipulasi isi file