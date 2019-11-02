<?php


  include 'konek.php';

  if (isset($_POST['simpan'])) {
    # code...
    $title	=$_POST['title'];
    $user=$_POST['user'];
    $isi =$_POST['isi'];

    $query="INSERT INTO news(title,deskripsi,user_id)values('$title','$isi','$user')";
    $konek->query($query)or die($konek->error);
    header('location:index.php');
  }

  if (isset($_POST['edit'])) {
    # code...
    $title	=$_POST['title'];
    $user=$_POST['user'];
    $isi =$_POST['isi'];

    $query1="UPDATE news SET title='$title',deskripsi='$isi',user_id='$user' where id_news=$user";
    $konek->query($query1)or die($konek->error);
     header('location:index.php');
  }


  if (isset($_GET['delete'])) {
    # code...
    $id=$_GET['delete'];

    $query1="DELETE FROM news where id_news='$id'";
    $konek->query($query1)or die($konek->error);
    header('location:index.php');
  }

  if (isset($_POST['add-user'])) {
    # code...
    $nama	=$_POST['nama'];
    $email=$_POST['email'];
    $role =$_POST['role'];

    $query="INSERT INTO user(nama,email,role)values('$nama','$email','$role')";
    $konek->query($query)or die($konek->error);
    header('location:index.php');
  }

  if (isset($_GET['detail'])) {
    # code...
    $id=$_GET['detail']


 ?>
 <!DOCTYPE html>
 <html>
   <head>
     <link rel="stylesheet" href="css/bulma.css">

     <link rel="stylesheet" href="css/font-awesome.css">
     <script type="text/javascript" src="js/jquery.js">

     </script>
     <style media="screen">
         *{
             /*border: 1px solid red;*/
         }
         .warp {
     background: white;
     position: fixed;
     width: 600px;
     top: 90px;
     border-radius: 10px;
 }
 .hide{
   display: none;
 }
     </style>
     <title></title>
   </head>
   <body>
 <form class="" action="proses.php" method="post">
     <section class="hero is-primary">
       <div class="hero-body">
         <div class="container">
           <h1 class="title">
             Dumbways-Store
           </h1>
           <h2 class="subtitle">
             Toko Buku Terlengkap
           </h2>

           <a href="index.php" class="button is-warning">Back</a>
         </div>
       </div>
       </section>


       <section class="section">
           <div class="container">
               <div class="columns">
                   <div class="column">
                         <h1 class="title"> <span class="has-text-primary">#</span> Hot News</h1>
                         <p class="subtilte">Semua Berita Terkini</p>

                   </div>
               </div>
           </div>
       </section>


       <section class="section">
            <div class="container">
                <div class="columns">
                    <div class="column">
                      <div class="card">
                        <?php
                          include 'konek.php';
                          $fetch=$konek->query("SELECT news.id_news,user.id,user.nama,news.title,news.deskripsi from user inner join news on user.id = news.user_id where id_news=$id ");


                          while ($hasil=$fetch->fetch_assoc()) {
                            # code...
                        ?>
                                <div class="card-image">
                                <figure class="image is-4by3">
                                  <img src="https://bulma.io/images/placeholders/1280x960.png" alt="Placeholder image">
                                </figure>
                                </div>
                                <div class="card-content">
                                <div class="media">
                                  <div class="media-left">
                                    <figure class="image is-48x48">
                                      <img src="https://bulma.io/images/placeholders/96x96.png" alt="Placeholder image">
                                    </figure>
                                  </div>
                                  <div class="media-content">
                                    <p class="title is-4"><?php echo $hasil['title']; ?></p>
                                    <p class="subtitle is-6">@ <?php echo $hasil['nama']; ?></p>
                                  </div>
                                </div>

                                <div class="content">
                                  <?php echo $hasil['deskripsi']; ?>
                                </div>
                              </div>
                            <?php } ?>
</div>


<?php

}
 ?>
