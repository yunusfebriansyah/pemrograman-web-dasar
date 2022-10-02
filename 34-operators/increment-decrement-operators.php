<?php
  // Secara singkat decrement = penurunan nilai - 1
  // Secara singkat increment = kenaikan nilai + 1
  /*
    ++$a	Pre-increment	Increments $a by one, then returns $a.
    $a++	Post-increment	Returns $a, then increments $a by one.
    --$a	Pre-decrement	Decrements $a by one, then returns $a.
    $a--	Post-decrement	Returns $a, then decrements $a by one.
  */
  $nilai = 9;
  $nilai++; // $nilai = $nilai + 1
  var_dump($nilai);

  ++$nilai; // $nilai = $nilai + 1
  var_dump($nilai);

  echo "<hr>";

  $nilai--; // $nilai = $nilai - 1
  var_dump($nilai);

  --$nilai; // $nilai = $nilai - 1
  var_dump($nilai);