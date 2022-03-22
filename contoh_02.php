<?php
  class Mobil
  {

    function __construct($nama)
    {
      echo "\nObject berhasil dibuat\n" . "Nama Mobil : {$nama}";
    }

    function __destruct()
    {
        echo "\nData mobil telah di hapuskan";
    }
  }

  $Mobil1 = new Mobil("Brio");
  $Mobil2 = new Mobil("Avanza");
  $Mobil3 = new Mobil("Carry");

  ?>