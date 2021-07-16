<?php 
include("header-link.php");
include("header.php");
?>

<section>
    <!-- News jumbotron -->
    <div class="container mt-24">
      <div class="row row-cols-1 row-cols-md-3">
        <div class="col mb-4">
          <div class="card">
            <a type="button" data-toggle="modal" data-target="#basicExampleModal"><img src="assets/img/yape2.png" class="card-img-top" alt="..."></a>
            <div class="card-body">
              <p class="card-text">
                Escanear codigo de YAPE. <strong> (Click en el logo Yape)</strong>
                <!-- <br>2.-Depositar S/15.00 
                  <br>3.-Enviar la captura o el vaoucher del deposito al numero de whatsapp (972947104).
                  <br>4.-Enviar junto con la captura del vaucher su correo electronico.
                  <br>5.-Revisar su correo electronico porque se le enviaran las credenciales(Usuario y contraseña).
                  <br>6.-Terminando todo, darle siguiente y loguearse.</p>    
                   -->
              <p style="color: #730587;"><strong>¡LA MANERA MÁS RÁPIDA!</strong></p>
              En su yapeo ponga su nombre completo y el nombre de lo que adquiere.
              <br>Yapear a: <strong><br>David Huere <br>972 947 104</strong>
            </div>
          </div>
        </div>
        <div class="col mb-4">
          <div class="card">
            <img src="assets/img/bcp2.png" class="card-img-top" alt="...">
            <div class="card-body">
              <p class="card-text">
                <!-- 1.-El deposito es de S/15.00.
              <br>2.-Depositar al siguiente numero de cuenta 191-17467875-016.
              <br>3.-Enviar la captura o el vaoucher del deposito al número de whatsapp (972947104).
              <br>4.-Enviar junto con la captura del vaucher su correo electronico.
              <br>5.-Revisar su correo electronico porque se le enviaran las credenciales(Usuario y contraseña).
              <br>6.-Terminando todo, darle siguiente y loguearse. -->

              <p style="color: #023cc6;"><strong>TRANSFERENCIAS O DEPÓSITOS</strong></p>
              Ahorro soles: <br><strong>191-17467875-016</strong><br>
              Código Interbancario: <br><strong>002-191-117467875016-59 <br> David Huere</strong>
              </p>
            </div>
          </div>
        </div>
        <div class="col mb-4">
          <div class="card">
            <img src="assets/img/wa.png" class="card-img-top" alt="...">
            <div class="card-body">
              <p class="card-text">
                <!-- 1.-El deposito es de S/15.00 
              <br>2.-Depositar al siguiente numero de cuenta 002-191-117467875016-59.
              <br>3.-Enviar la captura o el vaoucher del deposito al número de whatsapp (972947104).
              <br>4.-Enviar junto con la captura del vaucher su correo electronico.
              <br>5.-Revisar su correo electronico porque se le enviaran las credenciales(Usuario y contraseña).
              <br>6.-Terminando todo, darle siguiente y loguearse. -->
              <p style="color: #25cf42;"><strong>PRÁCTICO</strong></p>
              Envíenos foto de su voucher con su nombre y su producto y listo!!
              <strong><br>David Huere <br>972 947 104</strong>
              </p>
            </div>
          </div>
        </div>
      </div>
      <span class="d-inline-block heavy-rain-gradient text-dark">

      </span>
      <hr>
      <div class="media d-block d-md-flex">
        <img src="assets/img/importante2.png" class="rounded float-left" alt="..." width="200px" height="200px">
        <div class="media-body text-center text-md-left ml-md-3 ml-0">
          <br>
          <br>
          <br>
          <ul>
            <li><strong>Después de hacer el abono recibirá un código de acceso para que inicie sus estrategias vocacionales.</strong></li>
            <li><strong>Desde el momento en que ingrese su código de acceso,
                tiene 48 horas para crear las estrategias vocacionales que debe hacer con la participación de su hijo o hija.</strong></li>
            <li><strong>En todas las modalidades recibirá su comprobante de pago mediante e-mail.</strong></li>
          </ul>
        </div>
      </div>
      <hr>
      <div class="text-right" style="margin-bottom:30px;">
        <a href="login.php" type="button" style="color: white; border-radius: 50px;;" class="btn btn-black btn-lg">Siguiente <i class="fas fa-chevron-circle-right"></i></a>
      </div>
    </div>

  </section>
  <!--Section: Content-->
  <section class="text-center text-lg-left dark-grey-text">
  </section>
  <!--Section: Content-->

  <!-- Modal -->
  <div class="modal fade" id="basicExampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Código de Yape</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <img src="assets/img/qr.jpeg" height="450px;" alt="">
      </div>
    </div>
  </div>

  <?php 
include("footer.php");
?>