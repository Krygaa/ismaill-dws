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
    </style>
    <title></title>
  </head>
  <body>

    <section class="hero is-primary">
      <div class="hero-body">
        <div class="container">
          <h1 class="title">
            Dumbways-Store
          </h1>
          <h2 class="subtitle">
            Toko Buku Terlengkap
          </h2>
          <button type="button" name="button" id="button-model" onclick="modal()" class="button is-dark">Tambah</button>
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


      <section class="section">
          
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

  </script>

  </body>
</html>
