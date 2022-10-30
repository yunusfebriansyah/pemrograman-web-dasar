<?php
  ## User Defined Function
  // fungsi yang dibuat oleh programmer

  // mendefinisikan function menggunakan keyword function
  function sayHello()
  {
    echo "Hello World!!";
  }

  // panggil function
  sayHello();

  echo "<hr>";

  ## Function Parameter
  function sayName( $name = 'Tanpa nama' )
  {
    echo "Hay $name";
  }
  // panggil function disertai pengiriman argument
  sayName("Fred");

  echo "<hr>";

  ## Returning Function
  $name = 'Yunus Febriansyah';
  function getName()
  {
    global $name;
    return $name;
  }

  echo getName();
  echo "<hr>";
  
  ## Internal (built-in) function
  // function yang sudah dipunyai oleh php, kita tinggal pake aja
  echo strtolower($name);
  echo "<hr>";
