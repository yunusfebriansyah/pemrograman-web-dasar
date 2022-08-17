<?php

  // NULL 
  // Gampangnya, tipe data null akan mengisikan nilai kosong ke variabel

  // dalam kasus bahasa pemrograman Java
  /*
    string nama;
    ----eksekusi nya apa----
    nama = "siapa";
  */

  // kalau pada php
  $nama;
  $nama = NULL;
  if( is_null($nama) ) :
    echo "Ye emang null";
  endif;