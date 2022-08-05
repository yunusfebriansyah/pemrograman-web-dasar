<?php

  // floating point number data types
  // bisa dibilang double, float, bilangan real
  // yah intinya bilangan pecahan

  $nilaiBudi = 80.5;
  var_dump($nilaiBudi);
  echo "<hr>";
  
  // casting
  
  $string = "11.3";
  var_dump( (float) $string );
  $string = "11.4";
  var_dump( (double) $string );
  $string = "8.7";
  var_dump( floatval( $string ) );
  echo "<hr>";
  
  $int = 10;
  var_dump( (float) $int );
  echo "<hr>";

  $bool = true;
  var_dump( (float) $bool );
  $bool = false;
  var_dump( (float) $bool );
  echo "<hr>";

  $special = NULL;
  var_dump( (float) $special );
  echo "<hr>";
  