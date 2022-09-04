<?php

  // Saat formulir (form) dikirimkan ke skrip PHP, informasi dari formulir itu secara otomatis tersedia untuk skrip.
  // Ada 2 metode External Source, yaitu GET dan POST

  var_dump($_GET);

  echo "<hr>";

  var_dump($_GET['nama']);