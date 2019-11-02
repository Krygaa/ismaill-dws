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
          <button type="button" name="button" id="button-model" onclick="modal()" class="button is-dark">Add News</button>
          <a href="index.php?user=user" class="button is-warning">Tambah User</a>
        </div>
      </div>
      </section>


      <section class="section">
          <div class="container">
              <div class="columns">
                  <div class="column">
                        <h1 class="title"> <span class="has-text-primary">#</span> Daftar Item</h1>
                        <p class="subtilte">Semua Item Yang Tersedia</p>

                  </div>
              </div>
          </div>
      </section>


      <!-- Model -->


      <div class="modal" id="model">
          <div class="modal-background" onclick="tutup()"></div>
          <div class="modal-content">
            <section class="section warp">
                  <div class="field">
                    <form class="" action="proses.php" method="post">


                      <label for="" class="label">Title</label>
                      <div class="control">
                          <input type="text" class="input" name="title" value="">
                      </div>
                  </div>
                  <div class="field">
                      <label for="" class="label">User</label>
                      <div class="select">
                            <select name="user">
                              <?php
                                include 'konek.php';
                                $fetch=$konek->query("SELECT DISTINCT id,nama from user");
                                $nomor =1;

                                while ($hasil=$fetch->fetch_assoc()) {
                                  # code...


                              ?>
                              <option value="<?php echo $hasil['id']; ?>"><?php echo $hasil['nama']; ?></option>
                            <?php } ?>
                            </select>
                          </div>
                  </div>
                  <div class="field">
                      <label for="" class="label">Isi Berita</label>
                      <textarea class="textarea" name="isi" placeholder="Isi DAri Beritas"></textarea>
                  </div>
                  <div class="field">
                      <button type="submit" class="button is-primary" name="simpan">Save</button>
                  </div>
            </section>
          </div>
          <button class="modal-close is-large" aria-label="close" onclick="tutup()"></button>
      </div>


      <!--/Model-->


      <?php
      if (isset($_GET['user'])) {
        # code...

      ?>

      <section class="section">
            <div class="container">
                <div class="columns">
                    <div class="column">

                            <div class="field">



                                <label for="" class="label">Nama</label>
                                <div class="control">
                                    <input type="text" class="input" name="nama" value="">
                                </div>
                            </div>
                            <div class="field">
                                <label for="" class="label">E-mail</label>
                                <input type="text" class="input" name="email" value="">

                            </div>
                            <div class="field">
                                <label for="" class="label">Role</label>
                                <input type="text" class="input" name="role" value="">
                            </div>
                            <div class="field">
                                <button type="submit" class="button is-primary" name="add-user">Save</button>
                            </div>

                    </div>
                </div>
            </div>
      </section>

    <?php } ?>

      <?php
include 'konek.php';
      if (isset($_GET['edit'])) {
$id = $_GET['edit'];
$fetch=$konek->query("SELECT news.id_news,user.id,user.nama,news.title,news.deskripsi from user inner join news on user.id = news.user_id where id_news= $id");
$nomor =1;

while ($hasil=$fetch->fetch_assoc()) {
  # code...
  ?>
  <section class="section">
        <div class="container">
            <div class="columns">
                <div class="column">

                        <div class="field">



                            <label for="" class="label">Title</label>
                            <div class="control">
                                <input type="text" class="input" name="title" value=" <?php echo $hasil['title']?> ">
                            </div>
                        </div>
                        <div class="field">
                            <label for="" class="label">User</label>
                            <input type="text" class="input" disabled name="" value="<?php echo $hasil['nama'] ?>">
                            <input type="text" class="input" disabled name="user" value="<?php echo $hasil['id_news'] ?>">
                        </div>
                        <div class="field">
                            <label for="" class="label">Isi Berita</label>
                            <textarea name="isi" rows="8" cols="80" class="textarea"><?php echo $hasil['deskripsi'] ?></textarea>
                        </div>
                        <div class="field">
                            <button type="submit" class="button is-primary" name="edit">Save</button>
                        </div>

                </div>
            </div>
        </div>
  </section>


<?php }} ?>

      <section class="section">
          <div class="container">
              <div class="columns">
                  <div class="column">

                    <?php
                      include 'konek.php';
                      $fetch=$konek->query("SELECT news.id_news,user.id,user.nama,news.title,news.deskripsi from user inner join news on user.id = news.user_id");
                      $nomor =1;

                      while ($hasil=$fetch->fetch_assoc()) {
                        # code...
                    ?>
                    <div class="box">
                          <article class="media">
                          <div class="media-left">
                            <figure class="image is-64x64">
                              <img src="https://bulma.io/images/placeholders/128x128.png" alt="Image">
                            </figure>
                          </div>
                          <div class="media-content">
                            <div class="content">
                              <p>
                                <strong><?php echo $hasil['title']; ?></strong> <small>@ <?php echo $hasil['nama']; ?></small>
                                <br>
                                <?php echo substr($hasil['deskripsi'],0,90); ?>
                              </p>
                            </div>
                            <nav class="level is-mobile">
                              <div class="level-left">
                                <a class="level-item edit" aria-label="reply" href="index.php?edit=<?php echo $hasil['id_news']; ?>">
                                  <span class="icon is-small">
                                    <i class="fa fa-edit" aria-hidden="true"></i>
                                  </span>
                                </a>
                                <a class="level-item" aria-label="retweet" href="proses.php?detail=<?php echo $hasil['id_news']; ?>">
                                  <span class="icon is-small">
                                    <i class="fa fa-info" aria-hidden="true"></i>
                                  </span>
                                </a>
                                <a class="level-item has-text-danger" aria-label="like" name="del" href="proses.php?delete=<?php echo $hasil['id_news']; ?>">
                                  <span class="icon is-small">
                                    <i class="fa fa-remove" aria-hidden="true"></i>
                                  </span>
                                </a>
                              </div>
                            </nav>
                          </div>
                          </article>
                          </div>
                        <?php } ?>
                  </div>
              </div>
          </div>
      </section>



      <footer class="footer has-background-dark">
  <div class="content has-text-centered has-text-white">
    <p>
      <strong>Bulma</strong> by <a href="https://jgthms.com">Jeremy Thomas</a>. The source code is licensed
      <a href="http://opensource.org/licenses/mit-license.php">MIT</a>. The website content
      is licensed <a href="http://creativecommons.org/licenses/by-nc-sa/4.0/">CC BY NC SA 4.0</a>.
    </p>
  </div>
</footer>


  <script type="text/javascript">





          function modal(){
            document.getElementById("model").style.display="block";
          }

          function tutup(){
              document.getElementById("model").style.display="none";
          }
          function edit(){
            document.getElementById("hide").style.display="block";
          }



  </script>
    </form>
  </body>
</html>
