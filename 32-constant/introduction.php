<?php

  // Konstanta adalah pengidentifikasi (nama) untuk nilai sederhana
  // Seperti namanya, nilai itu tidak dapat berubah selama eksekusi skrip (kecuali magic constant)
  // Konstanta peka dengan huruf kecil maupun kapital (case-sensitive)
  // Dengan konvensi, pengidentifikasi konstanta selalu huruf besar (best practice)

  // Rumus Luas Lingkaran
  // phi * r2
  // sebelum php versi 8.0.0 cara mendefinisikan konstanta dengan memanggil fungsi define()
  define('PHI', 3.14);
  $r = 21;

  var_dump( PHI );