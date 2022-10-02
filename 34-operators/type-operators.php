<?php
  // Type operator menggunakan keyword instanceof
  // digunakan untuk menentukan apakah variabel PHP adalah objek hasil instansiasi dari class tertentu

  interface motor{};
  class motorHonda{}
  class supraX{}
  class beat extends motorHonda{}
  class motorMerkLain implements motor{}

  $motorSaya = new supraX();
  var_dump( $motorSaya instanceof supraX );

  echo "<hr>";
  $motorUdin = new beat();
  var_dump( $motorUdin instanceof motorHonda );

  echo "<hr>";
  $motorWati = new motorMerkLain();
  var_dump( $motorWati instanceof motor );