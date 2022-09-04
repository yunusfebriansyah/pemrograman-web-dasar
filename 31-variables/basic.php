<?php

  // Variabel dapat di representasikan menggunakan simbol dolar ($)
  // Diikuti dengan nama variabelnya

  $namaLengkap = "Yunus Febriansyah";
  $Nama = "Budi";
  var_dump($namaLengkap);
  var_dump($Nama);

  // Penamaan variabel harus diawali dengan huruf atau underscore _
  // Diikuti dengan angka, huruf atau underscode
  $binatang_1 = 'Anjing';
  var_dump($binatang_1);

  // Secara default, variabel harus disertai langsung dengan nilainya
  // Namun ketika variabel kita gak isikan nilainya, maka nilainya otomatis NULL
  $benda; // gak boleh kayak gini
  $benda = 'Kipas'; // harus kayak gini
  var_dump($benda);

  // Kita bisa menyimpan alamat memori dan ambil nilainya dari variabel menggunakan simbol &
  $alamatMemoriVariabelBenda = &$benda;
  var_dump($alamatMemoriVariabelBenda);

  // kita gak boleh menggunakan nama this pada variabel kita $this




