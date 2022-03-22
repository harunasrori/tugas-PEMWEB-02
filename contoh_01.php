<?php
  class Mobil
  {

    function __construct($nama)
    {
      echo "\nObject berhasil dibuat\n" . "Nama Mobil : {$nama}";
    }
  }

  $Mobil1 = new Mobil("Brio");
  $Mobil2 = new Mobil("Avanza");
  $Mobil3 = new Mobil("Carry");

  ?>