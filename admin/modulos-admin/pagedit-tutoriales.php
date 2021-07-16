<?php
include('header-admin.php');
include('../controlador/conexion.php');

$id = $_REQUEST['id'];
$consulta = "SELECT * FROM tutoriales where id_tu ='$id'";
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
    if ($nt == 3) {
    ?><script src="https://cdn.jsdelivr.net/npm/sweetalert2@8"></script>
        <script>
            Swal.fire(
                'Actualizado!',
                'Tutorial actualizado correctamente!',
                'success'
            ).then(function() {
                window.location.href = "pagedit-tutoriales.php?id=<?php echo $id; ?>&nt=0";

            });
            // window.location.href = "tutoriales.php ";
        </script>
    <?php
    } else {
    }
    ?>

    <div class="d-sm-flex align-items-center justify-content-center mb-4">
        <h3 class=" font-weight-bold text-DARK">Editar Módulo</h3>

    </div>
    <div class="d-sm-flex align-items-center justify-content-between mb-4">

        <a type="button" href=" tutoriales.php?nt=0" class="btn  btn-info"> <i class="fas fa-angle-double-left"></i> Volver</a>
    </div>
    <div class="row">
        <?php
        while ($dat = mysqli_fetch_assoc($resultado)) {
        ?>
            <div class="col-xl-12 col-md-12 mb-4">
                <div class="card border-bottom-primary shadow">

                    <form action="acciones-admin.php?action=EditarTutorial" method="post">
                        <!-- Email input -->
                        <div class="form-outline mb-4">
                            <label class="form-label" for="form1Example1">Titulo</label>
                            <input type="text" id="titulo2" name="titulo2" value="<?php echo $dat['titulo'] ?>" class="form-control" />

                        </div>

                        <!-- Password input -->
                        <div class="form-outline mb-4">
                            <label class="form-label" for="form1Example2">Descripcion</label>
                            <textarea type="text" id="descripcion2" name="descripcion2" rows="4" class="form-control"><?php echo $dat['descripcion'] ?></textarea>
                        </div>
                        <div class="form-outline mb-4">
                            <label class="form-label" for="form1Example2">Link del video</label>
                            <textarea type="text" id="link2" name="link2" rows="4" class="form-control"><?php echo $dat['link'] ?></textarea>
                        </div>

                        <div class="mb-4 text-center">
                            <input type="hidden" value="<?php echo $dat['id_tu'] ?>" id="id2" name="id2">
                            <button name="submit" class="btn-lg btn-primary">Actualizar</button>
                        </div>
                    </form>
                </div>
            </div>
        <?php

        } ?>
    </div>
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

<?php include('footer-admin.php'); ?>