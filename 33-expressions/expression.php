<?php 
  // Ekspresi adalah blok bangunan terpenting dari bahasa pemrograman PHP.
  // Di PHP, hampir semua hal yang kita tulis adalah ekspresi.
  // Jadi gampangnya, defini dari ekpresi ('apapun yang memiliki nilai')
  // Yang memiliki nilai adalah konstanta dan variabel

  // Expresi Penugasan
  echo "<h1>Ekspresi</h1>";
  echo "<h2>Ekspresi Penugasan</h2>";

  $a = 5;

  function foo ()
  {
      return 10;
  }

  $b = foo();

  $b++;
  ++$b;
  // sama artinya dengan $b = $b + 1;

  $b--;
  --$b;
  // sama artinya dengan $b = $b - 1;
  var_dump($b);

  echo "<h2>Ekspresi Pembanding</h2>";

  $bilangan1 = 87;
  $bilangan2 = '87';
  $resultComparison = $bilangan1 > $bilangan2; // bigger than
  $resultComparison = $bilangan1 >= $bilangan2; // bigger than or equal to
  $resultComparison = $bilangan1 < $bilangan2; // smaller than or equal to
  $resultComparison = $bilangan1 <= $bilangan2; // smaller than or equal to
  $resultComparison = $bilangan1 == $bilangan2; // equal
  $resultComparison = $bilangan1 === $bilangan2; // equal to and same type

  var_dump($resultComparison);

  echo "<h2>Ekspresi Penugasan Custom</h2>";
  $bilangan3 = 3;
  $bilangan3 += 5; // sama halnya dengan $bilangan3 = $bilangan3 + 5;
  $bilangan3 -= 2; // sama halnya dengan $bilangan3 = $bilangan3 - 2;
  $bilangan3 *= 2; // sama halnya dengan $bilangan3 = $bilangan3 * 2;
  $bilangan3 /= 2; // sama halnya dengan $bilangan3 = $bilangan3 / 2;
  var_dump($bilangan3);
