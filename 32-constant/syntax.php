<?php
  // Konstanta dapat didefinisikan menggunakan fungsi define() atau menggunakan keyword const
  // saat kita mendefinisikan konstanta menggunakan keyword const nilainya hanya tipe skalar (int, string, float, bool) atau bahkan array yang isinya data scalar
  // tidak seperti variabel yang cara memanggilnya menggunakan dolar ($), konstanta cukup dipanggil dengan menyebut namanya saja.

  // menggunakan fungsi define
  define("CONSTANT", "Hello world.");
  echo CONSTANT; // outputs "Hello world."

  echo "<hr>";

  // menggunakan keyword const
  const PHI = 3.14;
  echo PHI;
  
  const FULL_CONSTANT = CONSTANT . " - " . PHI;
  echo FULL_CONSTANT;

  echo "<hr>";

  // ketika menggunakan keyword const, maka pendefinisian konstanta harus berada pada ruang lingkup global / teratas

  const NAMA = "Yunus Febriansyah"; // global

  if( NAMA ) {
    // const PEKERJAAN = "Pengangguran"; // gak bisa scope local
    define('PEKERJAAN', 'Pengangguran');
    echo PEKERJAAN;
  }

