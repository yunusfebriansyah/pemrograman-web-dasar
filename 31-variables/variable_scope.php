<?php

  // Ruang lingkup variabel adalah konteks dimana ia didefinisikan.
  // Untuk sebagian besar semua variabel PHP hanya memiliki satu lingkup saja.
  // Cakupan tunggal ini mencakup file yang disertakan dan diperlukan juga.

  $nama = 'Yunus Febriansyah'; // global scope
  // echo $nama;

  function showName()
  {
    // $nama = 'Budi'; // local scope
    global $nama;
    $nama = 'Ujang';
    echo $nama;
  }

  function generateFullName()
  {
    $fullName = $GLOBALS["nama"] . " Pengangguran";
    echo $fullName;
  }

  showName();

  echo $nama;

  echo "<hr>";
  
  generateFullName();
  
  echo "<hr>";
  echo "<h2>Static Variable</h2>";

  // Menggunakan static variabel
  // Fitur penting lainnya dari pelingkupan variabel adalah variabel statis.
  // Variabel statis hanya ada dalam lingkup fungsi lokal, tetapi tidak kehilangan nilainya ketika eksekusi program meninggalkan lingkup ini.

  function test1()
  {
      $a = 0;
      echo $a;
      $a++;
  }

  function test2()
  {
      static $a = 0;
      echo $a;
      $a++;
  }

  test1();
  test1();
  echo "<br>";
  test2();
  test2();
  test2();