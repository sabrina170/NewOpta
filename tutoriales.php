<?php
include("header-link.php");
// include("header.php");
include("admin/controlador/conexion.php");
$consulta = "SELECT * FROM tutoriales ";
$resultado = mysqli_query($cn, $consulta);
?>
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
                        <strong><a class="btn btn-blue-grey" style="color: white; font-family: 'Franklin Gothic Medium', 
            'Arial Narrow', Arial, sans-serif; " href="nosotros.php">Nosotros</a></strong>

                    </li>
                    <li class="nav-item">
                        <a class="btn btn-indigo" style="color: white; font-family: 'Franklin Gothic Medium', 'Arial Narrow',
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
    .video-responsive {
        position: relative;
        padding-bottom: 56.25%;
        /* 16/9 ratio */
        padding-top: 30px;
        /* IE6 workaround*/
        height: 0;
        overflow: hidden;
    }

    .video-responsive iframe,
    .video-responsive object,
    .video-responsive embed {
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
    }

    .capa-exterior {

        min-height: 467px;
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
        color: #fff;
    }
</style>

</body>

</html>
<div class="row">
    <div class="col-lg-4" style="background-image: url(assets/img/ft4.jpg);background-position: center center;
    background-repeat: no-repeat;
    background-attachment: fixed;
    background-size: cover;">
        <div class=" container mt-5">
            <div class="capa-exterior">
                <div class="capa-interior">
                    <h2 style="color: white;font-family: cursive;"><strong> ALGUNOS TUTORIALES <br> PARA AYUDARTE</strong></h3>
                </div>
            </div>
        </div>
    </div>
    <div class="col-lg-8">
        <div class="container mt-5  mb-4">

            <section class="text-center">


                <div class="row">
                    <?php
                    while ($dat = mysqli_fetch_assoc($resultado)) {
                    ?>
                        <div class="col-lg-6 mb-4">
                            <div class="card">
                                <div class="bg-image hover-overlay ripple">
                                    <div class="video-responsive">
                                        <?php echo $dat['link'] ?>
                                    </div>
                                </div>
                                <div class="card-body">

                                    <h5 class="card-title"><?php echo $dat['titulo'] ?></h5>
                                    <p class="card-text">
                                        <?php echo $dat['descripcion'] ?>
                                    </p>

                                </div>
                                <div class="card-footer text-muted"><?php echo $dat['fecha_pu'] ?></div>
                            </div>
                        </div>

                    <?php
                    }
                    ?>
                </div>

            </section>
        </div>
    </div>

</div>

<?php include('footer.php'); ?>