<?php

$uang = 200000;
$belanja = 110500;





  # code...
  $kurang = $uang - $belanja;


  for ($i=0; $kurang > 50000 ; $i++) {
    # code...
    $kurang = $kurang - 50000;

  }

  for ($x=0; $kurang > 20000 ; $x++) {
    # code...
    $kurang = $kurang - 20000;
  }

  for ($y=0; $kurang > 10000 ; $y++) {
    # code...
    $kurang = $kurang - 10000;
  }

  for ($w=0; $kurang > 5000 ; $w++) {
    # code...
    $kurang = $kurang - 5000;
  }
  for ($f=0; $kurang > 2000 ; $f++) {
    # code...
    $kurang = $kurang - 2000;
  }

  for ($g=0; $kurang > 1000 ; $g++) {
    # code...
    $kurang = $kurang - 1000;
  }

  for ($h=0; $kurang == 500 ; $h++) {
    # code...
    $kurang = $kurang - 500;
  }



echo "50.000 = ".$i."<br>";
echo "20.000 = ".$x."<br>";
echo "10.000 = ".$y."<br>";
echo "5.000 = ".$w."<br>";
echo "2.000 = ".$f."<br>";
echo "1.000 = ".$g."<br>";
echo "  500 = ".$h."<br>";
echo "Sumbangkan =".$kurang."<br>";



 ?>
