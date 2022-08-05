<?php

  // nilai dari tipe data string dapat diartikan sebagai float atau int
  // namun, tidak semuanya dapat dioperasikan
  // hanya nilai string yang menyerupai float atau int saja

  $string1 = "42";
  $string2 = "6";
  $penjumlahanString = $string1 + $string2;
  echo $penjumlahanString;

  echo "<hr>";
  
  $string1 = "0.5";
  $string2 = "6";
  $penjumlahanString = $string1 + $string2;
  echo $penjumlahanString;
  echo "<hr>";
  