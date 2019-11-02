<?php


  $grade = "c";



  function gradeA(){
    echo "<h1>Grade A</h1>";
    $qty       = 7;
    $harga     = 3000;
    $potongan  = 500;
        if ($qty > 10) {
          # code...
          $potong = $potongan * $qty;
          $total  = ($harga-500)*$qty;
          $hasil  = $potong - $total;
          echo "Potongan :Rp. ".$potong."<br>";
          echo "Total Harga :Rp. ".$total."<br>";
          echo "Harga Yang Harus Dibayar :".$total;
        }
        else{

            $total = $harga * $qty;
            echo "Potongan :Rp. 0-, <br>";
            echo "Total Harga :Rp. ".$total."<br>";
            echo "Harga Yang Harus Dibayar : Rp. ".$total;;
        }

  }

    function gradeB(){
      echo "<h1>Grade B</h1>";
        $qty    = 3;
        $harga  = 3500;

        if ($qty > 5) {
          # code...
          $potongan = $harga*$qty;
          $total    = $potongan*50/100;
          $semua    = $potongan-$total;
          echo "Harga : Rp. ".$potongan."<br>";
          echo "Potongan : Rp. ".$total."<br>";
          echo "Harga yang harus dibayar : Rp.".$semua;
        }
        else{
          $total= $harga *$qty;
          echo "Harga : Rp. ".$total."<br>";
          echo "Potongan : Rp. 0-, <br>";
          echo "Harga yang harus dibayar : Rp.".$total;
        }
    }



  if ($grade == "a") {
    # code...
    gradeA();
  }
  elseif ($grade =="b") {
    # code...
    gradeB();
  }

  else {
    # code...
    echo "<h1>Grade C</h1>";
    $qty   = 10;
    $harga = 5000;
    $total = $harga * $qty;
    echo "Harga : Rp. ".$total."<br>";
    echo "Potongan : Rp. 0-, <br>";
    echo "Harga yang harus dibayar : Rp.".$total;

  }

?>
