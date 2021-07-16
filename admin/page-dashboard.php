<?php
session_start();

include('header-link.php');
include('header.php');
?>

<?php
require('controlador/conexion.php');
$consulta = "SELECT * FROM usuarios";
$resultado = mysqli_query($cn, $consulta);
?>

<div class="container-fluid">
  <div class="d-sm-flex align-items-center justify-content-between mb-4">
    <h1 class="h3 mb-0 text-gray-800">Lista de Usuarios</h1>
    <a href="#" id="btnNuevo" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm" data-toggle="modal">
      <i class="fas fa-plus"></i> Nuevo Usuario</a>
  </div>
  <!-- Page Heading -->
  <!-- <h1 class="h3 mb-2 text-gray-800">Tables</h1> -->
  <!-- <p class="mb-4">En este modulo podras ver las notas de pedido por el comprador </p> -->

  <!-- DataTales Example -->
  <div class="card shadow mb-4">
    <div class="card-header py-3">
      <h6 class="m-0 font-weight-bold text-primary">Notas de Pedido</h6>
    </div>
    <div class="card-body">
      <div class="table-responsive">
        <table id="tablaPersonas" class="table ">
          <thead class="table-default">
            <tr>
              <th>Id</th>
              <th>Usuario</th>
              <th>Email</th>
              <th>Contraseña</th>
              <th>Telefono</th>
              <th>Privilegio</th>
              <th>Fecha Registro</th>
              <th>Docs</th>
              <th>Acciones</th>


            </tr>
          </thead>
          <tbody>
            <?php
            while ($dat = mysqli_fetch_assoc($resultado)) {
            ?>
              <tr>


                <td><?php echo $dat['id'] ?></td>
                <td><?php echo $dat['usuario'] ?></td>
                <td><?php echo $dat['email'] ?></td>
                <td><?php echo $dat['password'] ?></td>
                <td><?php echo $dat['telefono'] ?></td>
                <td><?php echo $dat['privilegio'] ?></td>
                <td><?php echo $dat['fecha_registro'] ?></td>
                <td><a href="page-dashboard-usuario.php?ad=<?php echo $dat['id'] ?>&priv=1"><i class="far fa-sticky-note"></i></a></td>
                <td>
                  <div class='text-center'>
                    <div class='btn-group'>
                      <a class='btn btn-outline-dark btnEditar'><i class="far fa-edit"></i></a>
                      <a class='btn btn-outline-dark btnBorrar'><i class="fas fa-trash"></i></a>
                    </div>
                  </div>
                </td>

              </tr>
            <?php
            }
            ?>
          </tbody>
        </table>

      </div>
    </div>
  </div>

  <!--Modal para CRUD-->
  <div class="modal fade" id="modalCRUD" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel"></h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span>
          </button>
        </div>
        <form id="formPersonas">
          <div class="modal-body">
            <div class="form-group">
              <label for="username" class="col-form-label">usuario:</label>
              <input type="text" class="form-control" id="usuario">
            </div>
            <div class="form-group">
              <label for="gmail" class="col-form-label">Gmail:</label>
              <input type="text" class="form-control" id="email">
            </div>
            <div class="form-group">
              <label for="password" class="col-form-label">Password:</label>
              <input type="text" class="form-control" id="password">
            </div>

            <div class="form-group">
              <label for="gmail" class="col-form-label">Telefono:</label>
              <input type="number" class="form-control" id="telefono">
            </div>
            <div class="form-group">
              <label for="id_rol" class="col-form-label">Rol:</label>
              <select name="privilegio" id="privilegio" class="form-control">
                <option value="">Rol</option>
                <option value="1">Administrador</option>
                <option value="2">Cliente</option>
              </select>
            </div>

          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-light" data-dismiss="modal">Cancelar</button>
            <button type="submit" id="btnGuardar" class="btn btn-dark">Guardar</button>
          </div>
        </form>
      </div>
    </div>
  </div>
</div>
<?php
include('footer.php');
?>

<script>
  var fila; //capturar la fila para editar o borrar el registro

  //botón EDITAR    
  $(document).on("click", ".btnEditar", function() {
    fila = $(this).closest("tr");
    id = parseInt(fila.find('td:eq(0)').text());
    usuario = fila.find('td:eq(1)').text();
    email = fila.find('td:eq(2)').text();
    password = fila.find('td:eq(3)').text();
    telefono = parseInt(fila.find('td:eq(4)').text());
    privilegio = parseInt(fila.find('td:eq(5)').text());
    fecha_registro = fila.find('td:eq(6)').text();

    $("#usuario").val(usuario);
    $("#email").val(email);
    $("#password").val(password);
    $("#telefono").val(telefono);
    $("#fecha_registro").val(fecha_registro);
    opcion = 2; //editar

    $(".modal-header").css("background-color", "#007bff");
    $(".modal-header").css("color", "white");
    $(".modal-title").text("Editar Usuario");
    $("#modalCRUD").modal("show");

  });

  $("#formPersonas").submit(function(e) {
    console.log("TEST");
    e.preventDefault();
    usuario = $.trim($("#usuario").val());
    email = $.trim($("#email").val());
    password = $.trim($("#password").val());
    telefono = $.trim($("#telefono").val());
    privilegio = $.trim($("#privilegio").val());
    $.ajax({
      url: "controlador/usuarios/crud.php",
      type: "POST",
      //dataType: "json",
      data: {
        usuario: usuario,
        email: email,
        password: password,
        telefono: telefono,
        privilegio: privilegio,
        id: id,
        opcion: opcion
      },
      success: function(data) {
        //console.log(data);
        //var item = JSON.parse(data);
        location.reload();
        /*id = item["id"];            
        usuario = item['usuario'];
        email = item['email'];
        password = item['password'];
        telefono = item['telefono'];
        privilegio= item['privilegio'];
        fecha_registro = item['fecha_registro'];
        if(opcion == 1){
          tablaPersonas.row.add([id,usuario,email, password,telefono,privilegio,fecha_registro]).draw();
        }
        else{
          tablaPersonas.row(fila).data([id,usuario, email,password,telefono,privilegio,fecha_registro]).draw();
        }*/
      }
    });
    $("#modalCRUD").modal("hide");
  });

  //botón BORRAR
  $(document).on("click", ".btnBorrar", function() {
    fila = $(this);
    id = parseInt($(this).closest("tr").find('td:eq(0)').text());
    opcion = 3 //borrar
    var respuesta = confirm("¿Está seguro de eliminar el registro: " + id + "?");
    if (respuesta) {
      console.log("test");
      $.ajax({
        url: "controlador/usuarios/crud.php",
        type: "POST",
        //dataType: "json",
        data: {
          opcion: opcion,
          id: id
        },
        success: function(data) {
          //console.log(data);
          //tablaPersonas.row(fila.parents('tr')).remove().draw();
          location.reload();
        }
      });
    }
    //location.reload();   
  });
</script>