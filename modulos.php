<?php
include("header-link.php");
// include("header.php");
?>
<header>
  <!--Navbar-->
  <nav class="navbar navbar-expand-lg navbar-light bg-white">

    <div class="container">

      <a class="navbar-brand" href="index.php">
        <img src="assets/img/logo.png" height="40" alt="mdb logo">
        <img src="assets/img/logo2.png" alt="">
      </a>

      <!-- Collapse button -->
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#basicExampleNav" aria-controls="basicExampleNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>

      <!-- Links -->
      <div class="collapse navbar-collapse" id="basicExampleNav">

        <!-- Left -->
        <ul class="navbar-nav mr-auto">
          <li class="nav-item">
            <strong><a class="btn btn-indigo" style="color: white; font-family: 'Franklin Gothic Medium',
               'Arial Narrow', Arial, sans-serif; " href="modulos.php">Módulos</a></strong>

          </li>
          <li class="nav-item">
            <strong><a class="btn btn-blue-grey" style="color: white; font-family: 'Franklin Gothic Medium', 
            'Arial Narrow', Arial, sans-serif; " href="nosotros.php">Nosotros</a></strong>

          </li>
          <li class="nav-item">
            <a class="btn btn-blue-grey" style="color: white; font-family: 'Franklin Gothic Medium', 'Arial Narrow',
             Arial, sans-serif;" href="tutoriales.php">Tutoriales</a>
          </li>
          <li class="nav-item">
            <a class="btn btn-blue-grey" style="color: white; font-family: 'Franklin Gothic Medium', 'Arial Narrow', 
            Arial, sans-serif;" href="noticias.php">Noticias</a>
          </li>
        </ul>

        <!-- Right -->
        <ul class="navbar-nav">
          <li class="nav-item">
            <a href="login.php" class=" btn btn-blue" style="border-radius: 40px; color: white; font-family: 'Franklin Gothic Medium' , 'Arial Narrow' , Arial, sans-serif;">
              <i class="fas fa-user"></i> INGRESAR
            </a>
          </li>
        </ul>

      </div>

    </div>

  </nav>
  <!--/.Navbar-->

</header>
<style>
  body {

    background-image: url(assets/img/fondo.jpg);
    background-position: center center;
    background-repeat: no-repeat;
    background-attachment: fixed;
    background-size: cover;
  }
</style>


<section>
  <div class="container mt-24">

    <br>
    <!-- Card deck -->
    <div class="card-deck  mt-24">

      <!-- Card -->
      <div class="card mb-4">

        <!--Card image-->
        <div class="view overlay" style="padding: 20px;">
          <img class="card-img-top" src="assets/img/decidiendo.svg" alt="Card image cap" class="img-fluid">
          <a href="#!">
            <div class="mask rgba-white-slight"></div>
          </a>
        </div>

        <!--Card content-->
        <div class="card-body text-center">

          <!--Title-->
          <h4 class="card-title" style="font-family: cursive; color: #398291;"><strong>DECIDIENDO</strong> </h4>
          <!--Text-->
          <h5>
            Para diseñar estrategias vocacionales
            La mejor manera para elejir y decidir !!</h5>
          <br>
          <!-- Provides extra visual weight and identifies the primary action in a set of buttons -->
          <a href="pago.php" class="btn btn-lg text-white" style="background-color: #ff7591;"><strong>Ingresar</strong></a>

        </div>

      </div>
      <div class="card mb-4">
        <div class="view overlay" style="padding: 20px;">
          <img class="card-img-top" src="assets/img/escogiendo.svg" alt="Card image cap">
          <a href="#!">
            <div class="mask rgba-white-slight"></div>
          </a>
        </div>
        <div class="card-body text-center">

          <h4 class="card-title" style="font-family: cursive; color: #aa294f;"><strong>ESCOGIENDO</strong></h4>

          <h5>
            ¿Su hijo “sabe” lo que está escogiendo? ¿Esta seguro?
            Invítelo a resolver su cuestionario !!
          </h5>
          <br>
          <button type="button" class="btn btn-lg text-white" style="background-color: #ff7591;" data-toggle="modal" data-target="#exampleModal"><strong>Ingresar</strong></button>

        </div>

      </div>

      <div class="card mb-4">
        <div class="view overlay" style="padding: 20px;">
          <img class="card-img-top" src="assets/img/aprendiendo.svg" alt="Card image cap">
          <a href="#!">
            <div class="mask rgba-white-slight"></div>
          </a>
        </div>
        <div class="card-body text-center">
          <br>
          <!--Title-->
          <h4 class="card-title" style="font-family: cursive; color: #225992;"><strong>APRENDIENDO</strong></h4>
          <!--Text-->
          <h5>
            Para que su hijo sepa a lo que se enfrenta, sepa de “esa” carrera, arte, oficio u ocupación que está pensando. Dele información !!
          </h5>
          <br>
          <button type="button" class="btn btn-lg text-white" style="background-color: #ff7591;" data-toggle="modal" data-target="#exampleModal2">Ingresar</button>

        </div>

      </div>
    </div>
  </div>
</section>
<br><br>


<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Mide que tan seguro estas</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <div class="card mb-3" style="max-width: 540px;">
          <div class="row no-gutters">
            <div class="col-md-4">
              <img src="img/arreglo.jpg" class="card-img" height="150px;" alt="...">
            </div>
            <div class="col-md-8">
              <div class="card-body">
                <h5 class="card-title">Tests de Inteligencias</h5>
                <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                <p class="card-text"><small class="text-muted">Muy pronto...</small></p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

<!-- Modal 2-->
<div class="modal fade" id="exampleModal2" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Imformate sobre tu carrera o profesión</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <div class="card mb-3" style="max-width: 540px;">
          <div class="row no-gutters">
            <div class="col-md-4">
              <img src="img/arreglo2.jpg" class="card-img" height="150px;" alt="...">
            </div>
            <div class="col-md-8">
              <div class="card-body">
                <h5 class="card-title">Documentos</h5>
                <p class="card-text">Cientos de documentos con imformación precisa sobre la carrera que elegiras !!.</p>
                <p class="card-text"><small class="text-muted">Muy pronto...</small></p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

<?php
include("footer.php");
?>