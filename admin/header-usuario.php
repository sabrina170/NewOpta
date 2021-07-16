<!--Navbar -->
<nav class="mb-1 navbar navbar-expand-lg navbar-dark bg-dark lighten-1">
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent-555" aria-controls="navbarSupportedContent-555" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarSupportedContent-555">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item">
        <a class="navbar-brand" href="index.php">

          <img src="../assets/img/logo-blanco.png" alt="">
        </a>
      </li>
      <li class="nav-item">
        <a href="page-usuario-test.php" class="btn btn-success font-16">Nuevo Test</a>
      </li>
      <li class="nav-item">
        <a href="page-dashboard-usuario.php?priv=2" class="btn btn-primary font-16">Mis test</a>
      </li>
    </ul>
    <ul class="navbar-nav ml-auto nav-flex-icons">
      <li class="nav-item active">
        <a class="navbar-brand" href="#">
          Bienvenido(a) <b><?php echo $_SESSION['name']; ?></b>
        </a>
      </li>
      <li class="nav-item avatar" style="margin-right: 20px;">

        <a class="nav-link p-0" href="#">
          <img src="../assets/img/avatar.webp" class="rounded-circle z-depth-0" alt="avatar image" height="35">
        </a>

      </li>

      <li class="nav-item">
        <a href="cerrar-sesion.php" class="nav-link border border-light rounded waves-effect mr-2">
          <i class="fas fa-sign-out-alt"></i>Cerrar Sesión
        </a>
      </li>
    </ul>
  </div>
</nav>
<!--/.Navbar -->