<?php
include("header-link.php");
include("admin/controlador/conexion.php");

// include("header.php");
$consulta2 = "SELECT * FROM noticias";
$resultado2 = mysqli_query($cn, $consulta2);
?>
<style>
    #intro {
        /* Margin to fix overlapping fixed navbar */
        margin-top: 58px;
    }

    @media (max-width: 991px) {
        #intro {
            /* Margin to fix overlapping fixed navbar */
            margin-top: 45px;
        }
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
                        <strong><a class="btn btn-blue-grey" style="color: white; font-family: 'Franklin Gothic Medium', 
            'Arial Narrow', Arial, sans-serif; " href="nosotros.php">Nosotros</a></strong>

                    </li>
                    <li class="nav-item">
                        <a class="btn btn-blue-grey" style="color: white; font-family: 'Franklin Gothic Medium', 'Arial Narrow',
             Arial, sans-serif;" href="tutoriales.php">Tutoriales</a>
                    </li>
                    <li class="nav-item">
                        <a class="btn btn-indigo" style="color: white; font-family: 'Franklin Gothic Medium', 'Arial Narrow', 
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
<main style="background-image: url(assets/img/fondonoticias3.jpg);background-position: center center;
    background-repeat: no-repeat;
    background-attachment: fixed;
    background-size: cover;">

    <div class="container ">
        <br><br><br>
        <div class="row row-cols-1 row-cols-md-2">
            <?php
            while ($dat = mysqli_fetch_assoc($resultado2)) {
            ?>
                <div class="col mb-4">
                    <div class="card h-100">
                        <img src="data:image/jpeg;base64,<?php echo base64_encode($dat['foto']) ?>" class="card-img-top" alt="...">
                        <div class="card-body">
                            <div class="row mb-3">
                                <div class="col-6">
                                    <a class="text-danger">
                                        <i class="fas fa-chart-pie"></i>
                                        <?php echo $dat['categoria'] ?>
                                    </a>
                                </div>

                                <div class="col-6 text-end">
                                    <?php echo $dat['fecha'] ?>
                                </div>
                            </div>

                            <!-- Article title and description -->
                            <a class="text-dark">
                                <h5> <strong> <?php echo $dat['titulo'] ?></strong></h5>

                                <p>
                                    <?php echo $dat['descripcion'] ?>
                                </p>
                            </a>


                        </div>
                        <div class="card-footer">
                            <a href="<?php echo $dat['link'] ?>"> Más imfomación </a>
                        </div>
                    </div>
                </div>
            <?php
            }
            ?>
        </div>
        <div class="card-deck">


        </div>
        <br><br><br>
    </div>
</main>
<?php include('footer.php') ?>