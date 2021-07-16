<?php
session_start();

include('header-link.php');
$priv = $_REQUEST['priv'];
if ($priv == 1) {
  include('header.php');
} else {
  include('header-usuario.php');
}

?>
<?php
require('controlador/conexion.php');

if (isset($_GET['ad'])) {
  $ide_recogido = $_GET['ad'];
  $consulta = "SELECT * FROM test WHERE id_usu = '$ide_recogido'";
  $consulta2 = "SELECT * FROM usuarios WHERE id = '$ide_recogido'";
  $resultado2 = mysqli_query($cn, $consulta2);
} else {
  $ide_user = $_SESSION['usuario'];
  $consulta = "SELECT * FROM test WHERE id_usu = '$ide_user'";

  $consulta2 = "SELECT * FROM usuarios WHERE id = '$ide_user'";
  $resultado2 = mysqli_query($cn, $consulta2);
}

$resultado = mysqli_query($cn, $consulta);



?>


<div class="container mt-24">
  <div class="row">
    <div class="col-lg-12">
      <div class="text-center">
        <p class="font-24">Hola <span class="font-weight-bold"><?php echo $_SESSION['name'],  $priv; ?></span>, estos son tus test hasta el momento:</p>

      </div>

      <div class="table-responsive mt-24">
        <table id="tablaTest" class="table table-light" style="width:100%">
          <thead class="font-weight-bold bg-light">
            <tr class="">
              <th>Id</th>
              <th>Nombres</th>
              <th>Apellidos</th>
              <th>Edad</th>
              <th>Acciones</th>
            </tr>
          </thead>
          <tbody>
            <?php
            date_default_timezone_set("America/Lima");

            while ($dat = mysqli_fetch_assoc($resultado)) {

            ?>
              <tr>
                <td><?php echo $dat['id_test'] ?></td>
                <td><?php echo $dat['nombres'] ?></td>
                <td><?php echo $dat['apellidos'] ?></td>
                <td><?php echo $dat['edad'] ?></td>
                <td><a href="page-detalle-test.php?ide=<?php echo $dat['id_test']; ?>&priv=<?php echo $priv; ?>" class="btn btn-sm btn-primary"><i class="far fa-sticky-note fa-2x"></i></a></td>

              </tr>
            <?php
            }


            while ($dat = mysqli_fetch_assoc($resultado2)) {
              $tr = $dat['fecha_registro'];
            }
            // echo $tr;
            ?>
            <br>
            <?php
            ?>
          </tbody>
        </table>

      </div>
    </div>
  </div>
</div>

<?php
include('footer.php');
?>
<style>
  .dev-form {
    display: none;
  }
</style>
<script>
  $(document).ready(function() {
    $("#tablaTest").DataTable();
  });
</script>