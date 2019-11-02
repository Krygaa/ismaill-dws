<?php

    $konek = new mysqli("localhost","root","","dumbways");

      if (!konek) {
        # code...
        echo "Error";
        exit();
      }


      $query = $konek->query("SELECT * FROM news");
      $result = array();
      while ($fetch = $query->fetch_assoc()) {
        # code...
          $result[]= $fetch;
      }

      echo json_encode($result);


 ?>
