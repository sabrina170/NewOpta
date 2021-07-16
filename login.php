<?php
include("header-link.php");
include("header.php");
?>

<style>
  body {

    background-image: url(assets/img/FondoLogin.jpg);
    background-position: center center;
    background-repeat: no-repeat;
    background-attachment: fixed;
    background-size: cover;
  }
</style>

<section>
  <br><br>
  <div class="d-flex justify-content-center">
    <div class="card mb-3" style="max-width: 700px;">
      <div class="row no-gutters">

        <div class="col-md-6">
          <div class="card-body">
            <form id="loginForm" role="form" style="margin:50px;">
              <h4 style="font-family: 'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif;">Iniciar sesión</h4>

              <div class="form-group">
                <label for="usuario">Usuario</label>
                <input type="text" name="txtUsuario" class="form-control" id="usu" autofocus required placeholder="usuario123">
              </div>

              <div class="form-group">
                <label for="password">Password</label>
                <input type="password" name="txtPassword" class="form-control" required id="pass" placeholder="*********">
              </div>

              <button id="ingresar" class="btn btn-primary" style="border-radius: 30px; font-family: 'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif;">Ingresar</button>
            </form>
          </div>
        </div>

        <div class="col-md-6">
          <br>
          <img src="assets/img/login.jpg" class="card-img" alt="...">
        </div>
      </div>
    </div>
  </div>
</section>

<?php include("footer.php"); ?>

<script>
  function MostrarError(texto) {

    $('.overhang').css({
      'display': 'none'
    });
    $('.overhang').html(texto);
    $('.overhang').fadeIn();

    setTimeout(function() {
      $('.overhang').fadeOut();
    }, 1800);
  };

  $('#ingresar').on("click", function(e) {
    e.preventDefault();

    var nombre = $('#usu').val();
    var password = $('#pass').val();

    if (nombre == "") {

      MostrarError("Ingrese un Nombre de usuario");
      $('#usu').focus();
      return false;

    } else if (password == "") {
      MostrarError("Ingrese un Password");
      $('#pass').focus();
      return false;
    }

    $.ajax({
      type: "POST",
      url: "admin/controlador/acciones.php",
      data: {
        accion: 'validar',
        usuario: nombre,
        password: password
      },

      success: function(data) {
        console.log(data);
        MostrarError(data);

        if (data == "2") {
          MostrarError("Acceso Administrador");
          window.location.href = "admin/page-dashboard-usuario.php?priv=2";
          return false;
        } else if (data == "1") {
          MostrarError("Acceso vendedor");
          window.location.href = "admin/page-dashboard.php?priv=1";
        } else {
          MostrarError("El usuario no existe");
        }
        return false;
      },
      error: function(error) {
        return false;
      }

    });
  });
</script>