<?php
  // Operator aritmatika berfungsi untuk pengoperasian nilai matematika
  /*
    + : penjumlahan
    - : pengurangan
    / : pembagian
    * : perkalian
    % : hasil sisa bagi
    ** : pemangkatan
    +nilai : konversi nilai ke nilai lain yang sesuai
    -nilai : kebalikan dari nilai
  */
  $bilangan1 = 6;
  $bilangan2 = 2;
  $result = $bilangan1 + $bilangan2;
  var_dump($result);
  echo "<hr>";
  var_dump( +$bilangan1 );
  echo "<hr>";
  var_dump( -$bilangan1 );