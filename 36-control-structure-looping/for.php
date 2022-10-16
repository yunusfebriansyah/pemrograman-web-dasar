<?php

  // For diperuntukkan untuk perulangan yang sudah diketahui akhirnya

  $data = ["Udin", "Wati", "Wawan", "Siti", "Budi"];

  for( $i = 0; $i < count($data); $i++ ) :
    echo $data[$i];
    echo "<hr>";
  endfor;