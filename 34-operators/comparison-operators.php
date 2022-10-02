<?php
  // Operator pembanding seperti namanya digunakan untuk membandingkan dua nilai
  // hasil dari operator pembanding adalah true atau false

  $value1 = 5;
  $value2 = 7;

  echo "<h2>==</h2>";
  var_dump($value1 == $value2); // membandingkan kesamaan secara nilai
  echo "<hr>";

  echo "<h2>===</h2>";
  var_dump($value1 === $value2); // membandingkan kesamaan secara nilai dan tipe data
  echo "<hr>";

  echo "<h2>></h2>";
  var_dump($value1 > $value2); // lebih besar dari
  echo "<hr>";

  echo "<h2>>=</h2>";
  var_dump($value1 >= $value2); // lebih besar sama dengan
  echo "<hr>";

  echo "<h2><</h2>";
  var_dump($value1 < $value2); // kurang dari
  echo "<hr>";

  echo "<h2><=</h2>";
  var_dump($value1 <= $value2); // kurang dari sama dengan
  echo "<hr>";

  echo "<h2>!=</h2>";
  var_dump($value1 != $value2); // tidak sama dengan secara nilai
  echo "<hr>";

  echo "<h2><></h2>";
  var_dump($value1 <> $value2); // tidak sama dengan secara nilai
  echo "<hr>";

  echo "<h2>!==</h2>";
  var_dump($value1 !== $value2); // tidak sama dengan secara nilai dan tipe data
  echo "<hr>";

  echo "<h2><=></h2>";
  var_dump($value1 <=> $value2); // tidak sama dengan secara nilai dan tipe data
  echo "<hr>";