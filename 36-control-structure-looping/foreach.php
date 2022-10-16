<?php

  // Foreach adalah perulangan yang diperuntukkan untuk array

  $dataMahasiswa = [
    [
      'nama' => 'Udin',
      'umur' => 19,
      'jurusan' => 'Teknik Mesin'
    ],
    [
      'nama' => 'Wati',
      'umur' => 20,
      'jurusan' => 'Sistem Informasi'
    ],
    [
      'nama' => 'Budi',
      'umur' => 18,
      'jurusan' => 'Informatika'
    ]
  ];

  foreach ( $dataMahasiswa as $data ) :
    echo 'Nama : ' . $data['nama'] . '<br>';
    echo 'Umur : ' . $data['umur'] . '<br>';
    echo 'Jurusan : ' . $data['jurusan'] . '<br>';
    echo '<hr>';
  endforeach;