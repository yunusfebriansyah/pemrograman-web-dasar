<?php
  // sama kayak pengkondisian if else
  // diperuntukkan untuk mengisi nilai variabel
  // hanya berisi satu ekpresi penugasan

  $nilai = 80;
  $statusKelulusanUdin = $nilai >= 80 && $nilai <= 100 ? 'Lulus' : 'Gagal';

  // if( $nilai >= 80 && $nilai <= 100 ) :
  //   $statusKelulusanUdin = 'Lulus';
  // else:
  //   $statusKelulusanUdin = 'Gagal';
  // endif;

  echo $statusKelulusanUdin;

