<?php
include('header-admin.php');
include('../controlador/conexion.php');

$id = $_REQUEST['id'];
$consulta = "SELECT * FROM noticias where id_ti ='$id'";
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
                'Noticia actualizado correctamente!',
                'success'
            ).then(function() {
                window.location.href = "pagedit-noticias.php?id=<?php echo $id; ?>&nt=0";

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

        <a type="button" href="noticias.php?nt=0" class="btn  btn-info"> <i class="fas fa-angle-double-left"></i> Volver</a>
    </div>
    <div class="row">
        <?php
        while ($dat = mysqli_fetch_assoc($resultado)) {
        ?>
            <div class="col-xl-12 col-md-12 mb-4">
                <div class="card border-bottom-primary shadow">

                    <form action="acciones-admin.php?action=EditarNoticias" method="post" enctype="multipart/form-data">
                        <div class="modal-body">
                            <div class="mb-3 row">
                                <div class="col-sm-6">
                                    Titulo
                                    <input type="text" class="form-control" value="<?php echo $dat['titulo'] ?>" name="titulo2" id="titulo2" required>
                                </div>
                                <div class="col-sm-6">
                                    Categoria
                                    <select class="form-control" id="categoria2" name="categoria2" required>
                                        <option Selected>Categoria</option>
                                        <option value="Económicas" <?php if ($dat['categoria'] == "Económicas") {
                                                                        echo 'Selected';
                                                                    } else {
                                                                    } ?>>Económicas</option>
                                        <option value="Culturales" <?php if ($dat['categoria'] == "Culturales") {
                                                                        echo 'Selected';
                                                                    } else {
                                                                    } ?>>Culturales</option>
                                        <option value="Sociales"> <?php if ($dat['categoria'] == "Sociales") {
                                                                        echo 'Selected';
                                                                    } else {
                                                                    } ?>Sociales</option>
                                        <option value="Políticos" <?php if ($dat['categoria'] == "Políticos") {
                                                                        echo 'Selected';
                                                                    } else {
                                                                    } ?>>Políticos</option>
                                        <option value="Salud" <?php if ($dat['categoria'] == "Salud") {
                                                                    echo 'Selected';
                                                                } else {
                                                                } ?>>Salud</option>
                                        <option value="Científicas" <?php if ($dat['categoria'] == "Científicas") {
                                                                        echo 'Selected';
                                                                    } else {
                                                                    } ?>>Científicas</option>

                                        <option value="Internacionales" <?php if ($dat['categoria'] == "Internacionales") {
                                                                            echo 'Selected';
                                                                        } else {
                                                                        } ?>>Internacionales</option>
                                    </select>
                                </div>
                            </div>
                            <input type="hidden" value="<?php echo $dat['id_ti'] ?>" name="id2" id="id2">
                            Link
                            <input type="url" class="form-control" value="<?php echo $dat['link'] ?>" name="link2" id="link2">
                            <br>
                            <div class="mb-3 row">
                                <div class="col-sm-4">
                                    Imagen
                                    <img id="img1" src="data:image/jpeg;base64,<?php echo base64_encode($dat['foto']) ?>" width="200" height="100"><br><br>
                                    <input id="foto2" name="foto2" type="file">
                                </div>
                                <div class=" col-sm-8">
                                    Descripción
                                    <textarea class="form-control" id="descripcion2" name="descripcion2" rows="4"><?php echo $dat['descripcion']; ?></textarea>
                                </div>
                            </div>


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