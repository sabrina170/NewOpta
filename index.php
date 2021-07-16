<?php
include("header-link.php");
include("header.php");
?>
<style>
  body {

    background-image: url(assets/img/fondop.jpg);
    background-position: center center;
    background-repeat: no-repeat;
    background-attachment: fixed;
    background-size: cover;

  }

  .capa-exterior {

    min-height: 500px;
    position: relative;
  }

  .capa-interior {
    left: 0;
    margin: 0;
    position: absolute;
    right: 0;
    text-align: center;
    top: 50%;
    transform: translateY(-50%);

  }
</style>


<div class="text-center">
  <section>
    <div class="row">
      <div class="col-md-4 mt-48 m-28" style="text-align: left;">

        <h5>
          <div class="capa-exterior">
            <div class="capa-interior">
              <h1 class="fon" style="color:#45637d ; text-size: 880px; font-family: Impact, Haettenschweiler, 'Arial Narrow Bold', sans-serif;"> <strong> ORIENTACION <br> VOCACIONAL <br>OPTA PERÚ</strong></h1>
              <br>
              <h4 style="color: black;font-family: cursive;"> Te damos la bienvenida a nuestra <br> pagina web ...
                donde podras ver o instruirte con nuestras</h4>
              <br><br>
              <a href="modulos.php" class="btn btn-primary btn-lg" style="background-color: #a4ca69;">Comenzar</a>
            </div>

          </div>
        </h5>
        <br>

        <br>
      </div>
      <div class="col-md-8 ">
        <div class="mb-4">


        </div>
      </div>
    </div>
  </section>
</div>
<?php
// include("footer.php");
?>