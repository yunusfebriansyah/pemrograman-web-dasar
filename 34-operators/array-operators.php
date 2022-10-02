<?php
  /*
    Example	          Name	              Result
    $a + $b	          Union	              Union of $a and $b.
    $a == $b	        Equality	          true if $a and $b have the same key/value pairs.
    $a === $b	        Identity	          true if $a and $b have the same key/value pairs in the same order and of the same types.
    $a != $b	        Inequality	        true if $a is not equal to $b.
    $a <> $b	        Inequality	        true if $a is not equal to $b.
    $a !== $b	        Non-identity	      true if $a is not identical to $b.
  */

  $array1 = ['Yunus', 21, 'Informatika'];
  $array2 = ['Adam', 22, 'Sistem Informasi'];
  $arrayFull = $array1 + $array2; // indexnya sama, jadi terlihat tidak ada gabungan
  var_dump($arrayFull);

  echo "<hr>";
  
  $array2 = [
    3 => 'Adam',
    4 => 22,
    5 => 'Sistem Informasi'];
  $arrayFull = $array1 + $array2; // indexnya beda, jadi ditambah
  var_dump($arrayFull);
  
  echo "<hr>";

  $arrayFull[] = 'Ayu';
  var_dump($arrayFull);
  
  echo "<hr>";
  $array2 = $array1;
  var_dump( $array1 == $array2 );

  echo "<hr>";
  $array2 = $array1;
  $array2[1] = strval($array2[1]);
  var_dump( $array1 === $array2 );