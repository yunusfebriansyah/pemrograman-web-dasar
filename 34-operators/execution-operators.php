<?php
  //  PHP mendukung satu operator eksekusi
  // ditandai dengan ``
  // tujuannya untuk menyimpan perintah shell

  $perintahCekVersiPHP = `php -v`;
  echo "<h2>Versi PHP</h2><pre>$perintahCekVersiPHP</pre>";