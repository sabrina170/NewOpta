<?php
include('header-admin.php');
include('../controlador/conexion.php');

$id = $_REQUEST['id'];
$consulta = "SELECT * FROM nosotros where id_no ='$id'";
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
                'Perfil actualizado correctamente!',
                'success'
            ).then(function() {
                window.location.href = "pagedit-nosotros.php?id=<?php echo $id; ?>&nt=0";

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

        <a type="button" href="nosotros.php?nt=0" class="btn  btn-info"> <i class="fas fa-angle-double-left"></i> Volver</a>
    </div>
    <div class="row">
        <?php
        while ($dat = mysqli_fetch_assoc($resultado)) {
        ?>
            <div class="col-xl-12 col-md-12 mb-4">
                <div class="card border-bottom-primary shadow">

                    <form action="acciones-admin.php?action=EditarNosotros" method="post" enctype="multipart/form-data">
                        <div class="modal-body">

                            <input type="hidden" value="<?php echo $dat['id_no'] ?>" name="id2" id="id2">
                            Titulo
                            <input type="text" class="form-control" value="<?php echo $dat['titulo'] ?>" name="titulo2" id="titulo2">
                            <br>
                            Descripción
                            <textarea class="form-control" id="descripcion2" name="descripcion2" rows="4"><?php echo $dat['descripcion']; ?></textarea><br>
                            Imagen
                            <img id="img1" src="data:image/jpeg;base64,<?php echo base64_encode($dat['foto']) ?>" width="200" height="100"><br><br>
                            <input id="foto2" name="foto2" type="file">
                        </div>
                        <div class="mb-4 text-center">
                            <button name="submit" class="btn btn-primary">Actualizar</button>
                        </div>
                    </form>
                </div>
            </div>
        <?php

        } ?>
    </div>
</div>


<?php include('footer-admin.php'); ?>
<script>
    function init() {
        var inputFile = document.getElementById('foto2');
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