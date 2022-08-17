<?php

  // Iterable
  // Secara singkat, iterable adalah sebuah tipe data berjenis pseudo-type.
  // Gampangnya, iterable adalah implementasi dari interface traversable.
  // Traversable adalah sebuah data larik, atau sebuah tipe yang menyimpan lebih dari satu data

  // contoh penggunaan pada parameter function
  function showIterable( iterable $iterable ) {
    foreach ( $iterable as $data ) :
      echo $data . "<br>";
    endforeach;
  }

  $dataNama = [ "Budi", "Wati", "Siti", "Wawan" ];
  $nama = "Yunus Febriansyah";
  showIterable( $dataNama );

  // contoh agar iterable dapat diubah
  function editableIterable(iterable $iterable = []) {
    var_dump($iterable);
  }

  editableIterable($dataNama);
