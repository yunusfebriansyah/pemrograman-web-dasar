<?php

  // membahas soal tipe data integer
  // integer adalah bilangan tanpa koma (bukan bilangan pecahan)
  // integer dapat berbasis 10 (desimal), 8(oktal), 16(hexadesimal), 2(biner)

  $nilaiBudi = 80;
  var_dump($nilaiBudi);

  echo "<hr>";
  
  // batasan nilai dari tipe data integer
  $large_number = 2147483647;
  var_dump($large_number); 
  echo "<hr>";
  $large_number = 9223372036854775808;
  var_dump($large_number);
  echo "<hr>";

  // casting other data types to integer
  // (int) (integer)

  $boolean = true;
  var_dump( (int) $boolean);
  $boolean = false;
  var_dump( (integer) $boolean);

  echo "<hr>";
  
  $float = 8.9;
  var_dump( (int) $float);
  echo "<hr>";

  $string = "13";
  var_dump( (int) $string);
  $string = "15.5";
  var_dump( (int) $string);
  $string = "yunus febriansyah";
  var_dump( (int) $string);
  $string = "";
  var_dump( (int) $string);
  echo "<hr>";

  $special = NULL;
  var_dump( (int) $special);
  echo "<hr>";


  
