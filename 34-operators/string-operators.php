<?php
  // gabungan / concatenation : .
  // penugasan gabungan : .=

  $namaDepan = 'Yunus';
  $namaBelakang = 'Febriansyah';
  var_dump( $namaDepan . ' ' . $namaBelakang );

  echo "<hr>";
  $namaDepan .= ' ' . $namaBelakang; // $namaDepan = $namaDepan . ' ' . $namaBelakang;
  var_dump($namaDepan);
