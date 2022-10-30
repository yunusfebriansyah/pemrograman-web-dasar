<?php
  // Arrow function adalah fungsi yang diperkenalkan sejak PHP 7.4
  // untuk menjadi alternative anonymous function
  // arrow function hanya ada satu ekspresi dan ekspresi itu hanya return

  $y = 1;
  $fn1 = fn($x) => $x + $y;

  // equivalent to using $y by value:
  $fn2 = function ($x) use ($y) {
      $z = $x + $y;
      return $z;
  };

  echo $fn1(3);
  echo "<hr>";
  echo $fn2(3);