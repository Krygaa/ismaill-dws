<?php

  $nama=$_POST['nama'];
  $stok=$_POST['stok'];
  $deskripsi =$_POST['deskripsi'];
  $kategori =$_POST['kategori'];

  include 'konek.php';
  $query = $konek->query ("INSERT INTO books(nama,stok) VALUES('$nama','$stok')");

  if ($query) {
    # code...
    header('location:index.php');
  }
  else{
    echo "ERror";
  }


 ?>
