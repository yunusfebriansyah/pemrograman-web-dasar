<?php
  class Kendaraan{
    function jalaninKendaraan()
    {
      echo "Kendaraan berhasil berjalan";
    }
    static function cekTransmisi()
    {
      echo "Cek transmisi";
    }
  }

  // instansiasi class
  $kendaraan1 = new Kendaraan();
  $kendaraan1->jalaninKendaraan();
  echo "<hr>";
  $kendaraan1::cekTransmisi();

  echo "<hr>";

  // panggil static function pada class
  Kendaraan::cekTransmisi();