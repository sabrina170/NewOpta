<?php
include('header-admin.php');
include('../controlador/conexion.php');

$consulta = "SELECT * FROM nosotros where tipo = 'portada'";
$resultado = mysqli_query($cn, $consulta);

$consulta2 = "SELECT * FROM nosotros where tipo = 'perfil'";
$resultado2 = mysqli_query($cn, $consulta2);
$nt = $_REQUEST['nt'];
?>
<div class="container-fluid">

    <?php
    if ($nt == 1) {
    ?><script src="https://cdn.jsdelivr.net/npm/sweetalert2@8"></script>
        <script>
            Swal.fire(
                'Insertado!',
                'Perfil creado correctamente!',
                'success'
            ).then(function() {
                window.location.href = "nosotros.php?nt=0";
            });
            // window.location.href = "tutoriales.php ";
        </script>
    <?php
    } else if ($nt == 2) {
    ?><script src="https://cdn.jsdelivr.net/npm/sweetalert2@8"></script>
        <script>
            Swal.fire(
                'Eliminado!',
                'Perfil eliminado correctamente!',
                'error'
            ).then(function() {
                window.location.href = "nosotros.php?nt=0";
            });
            // window.location.href = "tutoriales.php ";
        </script>
    <?php
    } else if ($nt == 4) {
    ?><script src="https://cdn.jsdelivr.net/npm/sweetalert2@8"></script>
        <script>
            Swal.fire(
                'Error al insertar imagen!',
                'Problemas!',
                'warning'
            ).then(function() {
                window.location.href = "nosotros.php?nt=0";
            });
            // window.location.href = "tutoriales.php ";
        </script>
    <?php
    } else if ($nt == 6) {
    ?><script src="https://cdn.jsdelivr.net/npm/sweetalert2@8"></script>
        <script>
            Swal.fire(
                'Insertar una imagen!',
                'No otros archivos como(videos,musica,pdf,etc)',
                'warning'
            ).then(function() {
                window.location.href = "nosotros.php?nt=0";
            });
            // window.location.href = "tutoriales.php ";
        </script>
    <?php
    }
    ?>


    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h3 class=" font-weight-bold text-DARK">Modulo Nosotros</h3>
        <a href="#" data-target="#exampleModalNuevo" class="btn btn-sm btn-success " data-toggle="modal">
            <i class="fas fa-plus"></i> Nuevo Perfil</a>
    </div>

    <div class="modal fade" id="exampleModalNuevo" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-scrollable">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Agregar</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>

                <div class=" modal-body">
                    <form action="acciones-admin.php?action=InsertarNosotros" method="post" enctype="multipart/form-data">
                        Titulo
                        <input type="text" class="form-control" value="" name="titulo" id="titulo" required>
                        <br>
                        Tipo
                        <select class="form-control" id="tipo" name="tipo" required>
                            <option value="perfil" Selected>Perfil</option>
                        </select>
                        <br>
                        Descripción
                        <textarea type="text" class="form-control" id="descripcion" name="descripcion" rows="4" required></textarea><br>
                        Imagen
                        <br>
                        <img id="img1" width="200" height="100"><br><br>
                        <input id="foto" name="foto" type="file" required>

                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal" <?php echo false; ?>>Cerrar</button>
                    <button name="submit" class="btn btn-primary">Agregar</button>
                </div>
                </form>
            </div>
        </div>
    </div>


    <div class="row">

        <?php
        while ($dat = mysqli_fetch_assoc($resultado)) {
        ?>
            <div class="col-xl-12 col-md-6 mb-4">
                <div class="card border-bottom-primary shadow">
                    <div class="card-body">
                        <div class="row justify-content-end">
                            <div class="mr-2">
                                <a data-toggle="modal" data-toggle="modal" data-target="#exampleModal<?php echo $dat['id_no'] ?>"> <i class="fas fa-edit text-primary"></i></a>
                            </div>
                        </div>
                        <div class="row ">

                            <div class="col-xl-6 col-md-6 ">
                                <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">
                                    Imagen de Portada</div>
                                <img src="data:image/jpeg;base64,<?php echo base64_encode($dat['foto']) ?>" class="img-fluid">
                            </div>
                            <div class="col-xl-6 col-md-6 mb-4">
                                <div class="h6  font-weight-bold text-primary text-uppercase mb-4">
                                    <?php echo $dat['titulo'] ?></div>
                                <div class=" mb-4 font-weight-bold text-gray-800">
                                    <?php echo $dat['descripcion'] ?></div>
                            </div>

                        </div>
                    </div>

                </div>
            </div>
        <?php include('../modals/modal-nosotros.php');
        } ?>

    </div>
    <div class="row">
        <?php
        while ($dat = mysqli_fetch_assoc($resultado2)) {
        ?>
            <div class="col-xl-6 col-md-6 mb-4">
                <div class="card border-left-primary shadow">
                    <div class="card-body">
                        <div class="row justify-content-end">
                            <div class="mr-2">
                                <a href="pagedit-nosotros.php?id=<?php echo $dat['id_no'] ?>&nt=0"> <i class="fas fa-edit text-primary"></i></a>
                                <a data-toggle="modal" data-target="#Eliminar<?php echo $dat['id_no'] ?>"> <i class="fas fa-trash text-danger"></i></a>
                            </div>
                        </div>
                        <div class="row ">
                            <div class="col-xl-6 col-md-6 ">
                                <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">
                                    Imagen</div>
                                <img src="data:image/jpeg;base64,<?php echo base64_encode($dat['foto']) ?>" class="img-fluid">
                                <!-- <div class="h5 mb-0 font-weight-bold text-gray-800">$40,000</div> -->
                            </div>
                            <div class="col-xl-6 col-md-6 mb-4">
                                <div class="h6      font-weight-bold text-primary text-uppercase mb-1">
                                    <?php echo $dat['titulo'] ?>
                                </div>
                                <div class="h6 mb-0 font-weight-bold text-gray-800">
                                    <?php echo $dat['descripcion'] ?></div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>


        <?php
            include('../modals/modal-EliminarNo.php');
        } ?>

    </div>
</div>

<?php include('footer-admin.php'); ?>
<script>
    function init() {
        var inputFile = document.getElementById('foto');
        inputFile.addEventListener('change', mostrarImagen, false);
    }

    function mostrarImagen(event) {
        var file = event.target.files[0];
        var reader = new FileReader();
        reader.onload = function(event) {
            var img = document.getElementById('img1');
            img.src = event.target.result;
        }
        reader.readAsDataURL(file);
    }

    window.addEventListener('load', init, false);
</script>