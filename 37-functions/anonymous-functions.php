<?php
  // Fungsi anonim / anonymous function adalah fungsi tanpa nam

  $sayHello = function ( $name = 'World')
  {
    echo "Hello $name!!";
  };
  
  $sayHello('Fred');

  echo "<hr>";

  // global scope variable
  $name = 'Yunus Febriansyah';

  $sayName = function () use ( $name )
  {
    echo "Hello $name!!";
  };

  $sayName();