<?php

  // string adalah tipe data dari serangkaian karakter
  // mendukung 256-character set
  // batas maksimum nilai string adalah 2GB (2147483647 bytes)

  $string = "saya yunus febriansyah";

  // single quote / kutip satu
  $string = "Hari ini hari jum'at";
  echo $string;
  $string = ' Hari ini hari jum\'at';
  echo $string;
  echo '<hr>';

  // double quote / kutip dua
  $string = 'Saya Yunus "Febriansyah"';
  echo $string;
  $string = " Saya Yunus \"Febriansyah\"";
  echo $string;
  echo "<hr>";
  
  // kutip satu atau kutip dua ?
  $nama = "Yunus Febriansyah";
  $kalimat = "Halo nama saya $nama";
  echo $kalimat;
  $kalimat = ' Halo nama saya $nama';
  echo $kalimat;
  $kalimat = ' Halo nama saya ' . $nama;
  echo $kalimat;
  echo "<hr>";