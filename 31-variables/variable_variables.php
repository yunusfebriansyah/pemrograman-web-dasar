<?php
  // Terkadang lebih mudah untuk memiliki nama variabel variabel;
  // Artinya, nama variabel yang dapat diatur dan digunakan secara dinamis.

  // Ini kalau mendefinisikan dan mengisi langsung variabel
  $a = 'hello1';
  $$a = ' world!';

  // menampilkan variabel normal
  echo $a;

  // menampilkan variabel variabel
  echo $hello1;
