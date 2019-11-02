<?php


  function serial(){
    for ($i=0; $i < 16 ; $i++) {
      # code...
      $kalimat = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
      $acak=substr(str_shuffle($kalimat), 0, 4);
      $i=$i+3;
      if ($i == 15) {
        # code...
        $hasil=$acak;
      }
      else{
        $hasil=$acak."-";
      }
      // $hasil = $acak."-";
      $tampil=$hasil;
      echo $tampil;

    }
  }

  for ($i=0; $i < 3 ; $i++) {
    # code...

    echo serial()."<br>";

  }
?>
