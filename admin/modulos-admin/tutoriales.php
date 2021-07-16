<?php
include('header-admin.php');
include('../controlador/conexion.php');

$consulta = "SELECT * FROM tutoriales";
$resultado = mysqli_query($cn, $consulta);

$nt = $_REQUEST['nt'];
?>

<style>
    iframe {
        width: 300px;
        height: 150px;
        /*Sólo para que se vea, ya que la dirección al parecer está mal*/
        border: 5px green;
    }
</style>
<div class="container-fluid">
    <?php
    if ($nt == 1) {
    ?><script src="https://cdn.jsdelivr.net/npm/sweetalert2@8"></script>
        <script>
            Swal.fire(
                'Insertado!',
                'Tutorial creado correctamente!',
                'success'
            ).then(function() {
                window.location.href = "tutoriales.php?nt=0";
            });
            // window.location.href = "tutoriales.php ";
        </script>
    <?php
    } else if ($nt == 2) {
    ?><script src="https://cdn.jsdelivr.net/npm/sweetalert2@8"></script>
        <script>
            Swal.fire(
                'Eliminado!',
                'Tutorial elimnado correctamente!',
                'danger'
            ).then(function() {
                window.location.href = "tutoriales.php?nt=0";
            });
            // window.location.href = "tutoriales.php ";
        </script>
    <?php
    }
    ?>

    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h3 class=" font-weight-bold text-DARK">Modulo Tutoriales</h3>
        <a href="#" data-target="#exampleModalNuevo" class="btn btn-sm btn-success" data-toggle="modal">
            <i class="fas fa-plus"></i> Nuevo tutorial</a>
    </div>
    <!-- Modal -->
    <div class="modal fade" id="exampleModalNuevo" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-scrollable">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Agregar</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>

                <div class="modal-body">
                    <form action="acciones-admin.php?action=InsertarTutorial" method="post">
                        Titulo
                        <input type="text" class="form-control" value="" name="titulo" id="titulo" required>
                        <br>
                        Descripción
                        <textarea type="text" class="form-control" id="descripcion" name="descripcion" rows="4" required></textarea><br>
                        Link del Iframe de Youtube
                        <textarea type="text" class="form-control" id="link" name="link" rows="4" required></textarea>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal" <?php echo false; ?>>Cerrar</button>
                    <button name="submit" class="btn btn-primary">Agregar</button>
                </div>
                </form>
            </div>
        </div>
    </div>
    <!-- Fin del modal -->
    <div class="row">
        <?php
        while ($dat = mysqli_fetch_assoc($resultado)) {
        ?>
            <div class="col-xl-12 col-md-6 mb-4">
                <div class="card border-bottom-primary shadow">
                    <div class="card-body">

                        <div class="row justify-content-end">
                            <div class="mr-2">
                                <a href="pagedit-tutoriales.php?id=<?php echo $dat['id_tu']; ?>&nt=0"> <i class="fas fa-edit text-primary"></i></a>
                                <a data-toggle="modal" data-target="#Eliminar<?php echo $dat['id_tu'] ?>"> <i class="fas fa-trash text-danger"></i></a>
                            </div>
                        </div>
                        <div class="row">

                            <div class="col-xl-4 col-md-6 ">
                                <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">
                                    Imagen de Portada</div>
                                <div class="img-fluid"><?php echo ($dat['link']) ?></div>
                            </div>
                            <div class="col-xl-6 col-md-3 mb-4">
                                <div class="h6  font-weight-bold text-primary text-uppercase mb-4">
                                    <?php echo $dat['titulo'] ?></div>
                                <div class=" mb-4 font-weight-bold text-gray-800">
                                    <?php echo $dat['descripcion'] ?></div>
                            </div>
                            <div class="col-xl-2 col-md-3 mb-4">
                                <div class="mb-4 font-weight-bold text-gray-800 text-center">
                                    <div class="text-xs  font-weight-bold text-primary text-uppercase mb-4">
                                        Fecha de Publicación</div>
                                    <br>
                                    <a class="btn btn-secondary" role="button">
                                        <i class="fab fa-twitter me-2"></i> <?php echo $dat['fecha_pu'] ?></a>
                                </div>
                            </div>

                        </div>

                    </div>

                </div>
            </div>
        <?php
            include('../modals/modal-eliminarTu.php');
        } ?>

    </div>

</div>
<footer class="sticky-footer bg-white">
    <div class="container my-auto">
        <div class="copyright text-center my-auto">
            <span>Copyright &copy; Orientación Vocacional Opta Perú -2021</span>
        </div>
    </div>
</footer>
</div>
</div>
<a class="scroll-to-top rounded" href="#page-top">
    <i class="fas fa-angle-up"></i>
</a>



<script src="das/vendor/jquery/jquery.min.js"></script>
<script src="das/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
<script src="das/vendor/jquery-easing/jquery.easing.min.js"></script>
<script src="das/js/sb-admin-2.min.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<script type="text/javascript" src="assets/js/datatables.min.js"></script>
<script type="text/javascript" src="assets/js/main.js"></script>
<script type="text/javascript" src="assets/js/funciones_generales.js"></script>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@8"></script>
<script type="text/javascript" src="assets/js/FileSaver.js"></script>
<script type="text/javascript" src="assets/js/jquery.wordexport.js"></script>