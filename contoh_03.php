<?php
  class Mahasiswa
  {

    function __construct($nama, $NIM)
    {
      $this->nama = $nama;
      $this->NIM = $NIM;
    }
    function __destruct()
    {
      echo "\nNama Mahasiswa\t: {$this->nama} " . "\nNIM Mahasiswa\t: {$this->NIM}";
    }
  }

  $Mahasiswa1 = new Mahasiswa("Harun", "205150200111077");
  $Mahasiswa2 = new Mahasiswa("Hani", "205150207111055");
  $Mahasiswa3 = new Mahasiswa("Putri", "205150201111022");

  echo "== KELAS USAI =="
  ?>