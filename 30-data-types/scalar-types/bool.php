<?php

  // tipe data boolean
  // mengungkapkan nilai kebenaran TRUE atau FALSE
  $statusLampu = TRUE;
  var_dump($statusLampu);

  echo "<hr>";
  
  $tipeDataLain = "true";
  var_dump( (boolean) $tipeDataLain);

  echo "<hr>";
  
  // cast other types to boolean
  $bool = false;
  var_dump( (bool) $bool);
  echo "<hr>";
  $int = 0;
  var_dump( (bool) $int);
  echo "<hr>";
  $float = -0.0;
  var_dump( (bool) $float);
  echo "<hr>";
  $string = "0";
  var_dump( (bool) $string);
  echo "<hr>";
  $array = [];
  var_dump( (bool) $array);
  echo "<hr>";
  $special = NULL;
  var_dump( (bool) $special);
  
  