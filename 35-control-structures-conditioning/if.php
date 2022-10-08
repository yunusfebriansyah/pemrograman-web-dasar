<?php

  $statusBerangkat = false;
  $apakahSiUdinMauBerangkat = false;
  // kalau si udin mau berangkat
  if( $apakahSiUdinMauBerangkat ) {
    $statusBerangkat = true;
  }
  echo $statusBerangkat;

  $angka = 9;

  if( $angka > 0 && $angka <= 10 ) {
    echo 'Angka diantara 0 sampai 10';
  }