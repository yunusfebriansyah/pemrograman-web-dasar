<?php

  // Array
  // Array bisa juga disebut sebagai List, Table Hash, Dictionary, Stack, Queue, etc
  // Array dapat menyimpan data lebih dari satu, menggunakan pemisah koma
  // dan juga data yang ada pada array bisa mempunyai tipe data yang berbeda-beda

  // contoh array numeric dan menggunakan cara lama => array()
  $myArray = array( "Yunus", 1, true, 10.4 );

  // contoh array associative dan menggunakan cara baru => []
  $myArray2 = [
    "nama"  => "Yunus Febriansyah",
    "umur"  => 21,
    "pekerjaan" => false
  ];

  var_dump($myArray);
  echo "<hr>";
  var_dump($myArray2);
  echo "<hr>";
  
  // print data pada index / key tertentu
  echo $myArray[0];
  echo $myArray2["umur"];
  echo "<hr>";
  
  // membuat atau mengganti nilai pada key tertentu
  $myArray2["umur"] = 20;
  echo $myArray2["umur"];
  echo "<hr>";
  
  // menambah isi dari array ke key terakhir
  $myArray[] = "Fadhil";
  var_dump($myArray);
  $myArray2["jk"] = "Laki-laki";
  var_dump($myArray2);
  echo "<hr>";
  
  // menghapus pasangan key & value
  unset($myArray[4]);
  var_dump($myArray);
  unset($myArray2["jk"]);
  var_dump($myArray2);
  echo "<hr>";
  
  // menghapus array nya
  unset($myArray);
  var_dump($myArray);
  echo "<hr>";
  // niruin contoh
  $array = array(
    1    => "a",
    "1"  => "b",
    1.5  => "c",
    true => "d",
  );
  var_dump($array);
  echo "<hr>";

  echo "<h1>Array Multidimensi</h1>";
  $dataManusia = [
    [
      "nama"      =>  "Yunus Febriansyah",
      "umur"      =>  21,
      "bekerja"   => false
    ],
    [
      "nama"      =>  "Wati",
      "umur"      =>  18,
      "bekerja"   => true
    ],
    [
      "nama"      =>  "Udin",
      "umur"      =>  20,
      "bekerja"   => true
    ],
  ];
  // pake perulangan khusus array yaitu foreach
  foreach ( $dataManusia as $perData ) :
    echo "Nama : " . $perData["nama"];
    echo "<br>";
    echo "Umur : " . $perData["umur"];
    echo "<br>";
    echo "Sudah Bekerja : " . $perData["bekerja"];
    echo "<br><br>";
  endforeach;

