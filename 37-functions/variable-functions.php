<?php
  // Variable Function
  // adalah cara yang dilakukan untuk pemanggilan fungsi yang nama fungsinya kita simpan kevariabel

  function sayHello()
  {
    echo "Hello World!!";
  }

  function sayName( $name = 'Tanpa nama' )
  {
    echo "Hay $name";
  }

  $namaFungsi1 = 'sayHello';
  $namaFungsi1(); // equivalent dengan sayHello()

  echo "<hr>";

  $namaFungsi2 = 'sayName';
  $namaFungsi2('Fred');