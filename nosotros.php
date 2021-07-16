<?php
include("header-link.php");
// include("header.php");
include('admin/controlador/conexion.php');

$consulta = "SELECT * FROM nosotros where tipo = 'portada'";
$resultado = mysqli_query($cn, $consulta);

$consulta2 = "SELECT * FROM nosotros where tipo = 'perfil'";
$resultado2 = mysqli_query($cn, $consulta2);
?>
<style>
    main {
        background-color: green;
    }

    #fondo {
        background-color: rgba(12, 57, 140, 0.7);
    }
</style>
<header>
    <!--Navbar-->
    <nav class="navbar navbar-expand-lg navbar-light">

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
                        <strong><a class="btn btn-blue-grey" style="color: white; font-family: 'Franklin Gothic Medium',
               'Arial Narrow', Arial, sans-serif; " href="modulos.php">Módulos</a></strong>

                    </li>
                    <li class="nav-item">
                        <strong><a class="btn btn-indigo" style="color: white; font-family: 'Franklin Gothic Medium', 
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
<?php
while ($dat = mysqli_fetch_assoc($resultado)) {
?>

    <section style="background-image: url(data:image/jpeg;base64,<?php echo base64_encode($dat['foto']) ?>);background-position: center center;
    background-repeat: no-repeat;
    background-attachment: fixed;
    background-size: cover;">
        <div id="fondo">
            <br>
            <!-- Jumbotron -->
            <div class="bg-image p-5 text-center shadow-1-strong rounded text-white">
                <!-- <h1 class="mb-3 h2">Jumbotron</h1> -->
                <h3><strong> <?php echo $dat['titulo'] ?></strong></h3>
                <h5>
                    <?php echo $dat['descripcion']; ?>
                </h5>
                <br>


            </div>
        </div>
    </section>

<?php
}
?>


<div class="container">
    <hr class="my-5" />
    <!--Section: Content-->
    <section>
        <?php
        while ($dat = mysqli_fetch_assoc($resultado2)) {
        ?>
            <div class="row">
                <div class="col-md-6 gx-5 mb-4" style="background-color: white;">
                    <div class="bg-image hover-overlay ripple shadow-2-strong" data-mdb-ripple-color="light">
                        <img src="data:image/jpeg;base64,<?php echo base64_encode($dat['foto']) ?>" class="img-fluid rounded-pill" />
                        <a href="#!">
                            <div class="mask" style="background-color: rgba(251, 251, 251, 0.15);"></div>
                        </a>
                    </div>
                </div>

                <div class="col-md-6 gx-5 mb-4">
                    <br><br><br>
                    <h4><strong> <?php echo $dat['titulo'] ?></strong></h4>
                    <p class="text-muted" style="color: white;">
                        <?php echo $dat['descripcion']; ?>
                    </p>

                </div>
            </div>
            <br>
        <?php
        }
        ?>

    </section>
    <!--Section: Content-->

    <hr class="my-5" />

</div>
<?php include('footer.php') ?>