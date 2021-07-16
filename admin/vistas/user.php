<?php 
$id = $_SESSION["usuario"];
require('controlador/conexion.php');
$consulta = "SELECT  * FROM `usuarios` where id='$id'";
$resultado =mysqli_query($cn, $consulta);
$data = mysqli_fetch_assoc($resultado);

$time =  time();

?>

<section>

<div id="form-1" class="dev-form justify-content-center ani_step" style="display:block">
      <div class="card container">
        <br>
        <img src="../assets/img/profe.jpg" class="card-img-top" alt="...">
        <div class="card-body">
          <form method="post" action="ProPage2.php" style="margin-left: 30px;">
            <div class="form-group row">
              <label for="input" class="col-sm-2 col-form-label">Nombres</label>
              <div class="col-sm-8">
                <input type="text" id="reg1_nombre" class="form-control au1" data-type="text" data-msj="Ingrese un Nombre" name="Nombres" placeholder="Nombres" required>
              </div>
            </div>

            <div class="form-group row">
              <label for="input" class="col-sm-2 col-form-label">Apellidos</label>
              <div class="col-sm-8">
                <input type="text" id="reg1_apellidos" class="form-control au1" data-type="text" data-msj="Ingrese un Apellido" name="Apellidos" placeholder="Apellidos" required>
              </div>
            </div>

            <div class="form-group row">
              <label for="input" class="col-sm-2 col-form-label">Edad</label>
              <div class="col-sm-8">
                <input type="number" id="reg1_edad" class="form-control au1" data-type="number" data-msj="Ingrese una edad" name="Edad" placeholder="Edad" required>
              </div>
            </div>

            <div class="form-group row">
              <label for="input" class="col-sm-2 col-form-label">Grado</label>
              <div class="col-sm-8">
                <select name="Grado" id="reg1_grado" class="form-control au1" data-type="select" data-msj="Seleccione un grado" required>
                  <option value="0">Seleccione un grado</option>
                  <option value="Estudiante 3º Secundaria">Estudiante 3º Secundaria</option>
                  <option value="Estudiante 4º Secundaria">Estudiante 4º Secundaria</option>
                  <option value="Estudiante 5º Secundaria">Estudiante 5º Secundaria</option>
                  <option value="Secundaria Completa">Secundaria Completa</option>
                  <option value="Universitario">Universitario</option>
                </select>
              </div>
            </div>
            <!-- <input name="submit" type="submit" value="Siguiente" href="pagina2.php" /> -->
            <div class="text-center" style="margin-top:10px;">
              <input type="hidden" value="<?php ?>" name="id_dusu" id="id_dusu">
              <a href="#" id="reg1" data-tar="form-2" class="btn btn-primary dev-step">Siguiente </a>
            </div>
          </form>

        </div>
      </div>
    </div>

    <!-- PARTE 2 -->

    <div id="form-2" class="dev-form ani_step" style="margin:50px;">
    <form method="post" id="formulario_2">
      <div class="view view-cascade gradient-card-header blue-gradient">
        <h3 class="text-center" style="color:white; "><strong>CUADRO GENERADOR DE ESTRATEGIAS</strong></h3>
      </div>
      <div class="table-responsive">
        <table class="table table-hover table-light">
          <thead class="table juicy-peach-gradient">
            <tr>
              <th scope="col">Estr</th>
              <th scope="col" style="color: black;" class="text-center">
                <div class="btn btn-outline-black btn-rounded btn-sm px-2">1 </div><br>¿Qué carrera desea <BR>estudiar mi hijo?
              </th>
              <th scope="col" style="color: black;" class="text-center">
                <div class="btn btn-outline-black btn-rounded btn-sm px-2">2 </div><br>¿He hablado con mi<br> hijo de esta carrera?
              </th>
              <th scope="col" style="color: black;" class="text-center">
                <div class="btn btn-outline-black btn-rounded btn-sm px-2">3 </div><br>¿Qué nivel de estudio tomará mi hijo?
              </th>
              <th scope="col" style="color: black;" class="text-center">
                <div class="btn btn-outline-black btn-rounded btn-sm px-2">4 </div><br>¿En donde desea estudiar <br>mi hijo esta carrera?
              </th>
              <th scope="col" style="color: black;" class="text-center">
                <div class="btn btn-outline-black btn-rounded btn-sm px-2">5 </div><br>¿Mi hijo ha hecho <br>OV para esta carrera?
              </th>
              <th scope="col" style="color: black;" class="text-center">
                <div class="btn btn-outline-black btn-rounded btn-sm px-2">6 </div><br>¿Lo veo como para<br> estudiar esta carrera?
              </th>
              <th scope="col" style="color: black;" class="text-center">
                <div class="btn btn-outline-black btn-rounded btn-sm px-2">7 </div><br>¿Con qué ayuda cuento para la Educ. de mi hijo?
              </th>
              <th scope="col" style="color: black;" class="text-center">
                <div class="btn btn-outline-black btn-rounded btn-sm px-2">8 </div><br>¿En qué ciudad <br>podría estudiar mi hijo?
              </th>
              <th scope="col" style="color: black;" class="text-center">
                <div class="btn btn-outline-black btn-rounded btn-sm px-2">9 </div><br>¿Cuánto invertiría <br>al mes en sus estudios?
              </th>
              <th scope="col" style="color: black;" class="text-center">
                <div class="btn btn-outline-black btn-rounded btn-sm px-2">10 </div><br>¿En que sector<br> laboral se ubicaría mi hijo?
              </th>
              <th scope="col" style="color: black;" class="text-center">
                <div class="btn btn-outline-black btn-rounded btn-sm px-2">11 </div><br>¿A que cargo o <br> puesto aspiraría mi hijo?
              </th>
              <th scope="col" style="color: black;" class="text-center">
                <div class="btn btn-outline-black btn-rounded btn-sm px-2">12 </div><br>¿Veo a mi hijo <br>trabajando en esto?
              </th>


            </tr>
          </thead>
          <tbody>
            <tr>
              <th scope="row">A</th>
              <td><input name="A1" class="form-control au2" data-type="select" data-msj="Ingrese una carrera" placeholder="Ej. Ing. de Sistemas" style="width:170px" type="text" required /></td>
              <td>
                <select name="A2" class="form-control au2" data-type="select" data-msj="Seleccione una opción" style="width:170px" required>
                  <option value="0">Seleccione una opción</option>
                  <option value="Si">Si</option>
                  <option value="No">No</option>
                  <option value="Un Poco">Un Poco</option>
                </select>
              </td>
              <td>
                <select name="A3" class="form-control au2" data-type="select" data-msj="Seleccione un nivel" style="width:170px" required>
                  <option value="0">Seleccione un nivel</option>
                  <option value="Superior Universitario">Superior Universitario</option>
                  <option value="Superior Técnica">Superior Técnica</option>
                  <option value="Carrera Corta">Carrera Corta</option>
                  <option value="Curso">Curso</option>
                </select>
              </td>
              <td><input name="A4" type="text" class="form-control au2" data-type="text" data-msj="Ingrese un valor" placeholder="Ej. San Marcos" style="width:170px" required /></td>
              <td>
                <select name="A5" class="form-control au2" data-type="select" data-msj="Seleccione una opción" style="width:170px" required>
                  <option value="0">Seleccione una opción</option>
                  <option value="Si">Si</option>
                  <option value="No">No</option>
                  <option value="Un Poco">Un Poco</option>
                </select>
              </td>
              <td>
                <select name="A6" class="form-control au2" data-type="select" data-msj="Seleccione una opción" style="width:170px" required>
                  <option value="0">Seleccione una opción</option>
                  <option value="Si">Si</option>
                  <option value="No">No</option>
                  <option value="No estoy seguro">No estoy seguro</option>
                </select>
              </td>
              <td>
                <select name="A7" class="form-control au2" data-type="select" data-msj="Seleccione una opción" style="width:170px" required>
                <option value="0">Seleccione una opción</option>

                  <option value="La familia">La familia</option>
                  <option value="Un prestamo">Un prestamo</option>
                  <option value="Una beca">Una beca</option>
                  <option value="Una empresa">Una empresa</option>
                  <option value="Otro">Otro</option>
                </select>
              </td>
              <td>
                <input name="A8" type="text" class="form-control au2" data-type="select" data-msj="Ingrese una ciudad" placeholder="Ej. Lima" style="width:170px" required />
              </td>
              <td>
                <input name="A9" type="number" class="form-control au2" data-type="select" data-msj="Ingrese un monto" placeholder="Ej. S/350" style="width:170px" required />
              </td>
              <td>
                <select name="A10" class="form-control au2" data-type="select" data-msj="Seleccione un sector" style="width:170px" required>
                  <option value="0">Seleccione un sector</option>
                  <option value="Sector Agropecuario">Sector Agropecuario</option>
                  <option value="Sector de Servicios">Sector de Servicios</option>
                  <option value="Sector Industrial">Sector Industrial</option>
                  <option value="Sector de Transporte">Sector de Transporte</option>
                  <option value="Sector de Comercio">Sector de Comercio</option>
                  <option value="Sector Financiero">Sector Financiero</option>
                  <option value="Sector de la Construcción">Sector de la Construcción</option>
                  <option value="Sector Minero y Energético">Sector Minero y Energético</option>
                  <option value="Sector Solidario">Sector Solidario</option>
                  <option value="Sector de Comunicaciones">Sector de Comunicaciones</option>
                </select>
              </td>
              <td>
                <select name="A11" class="form-control au2" data-type="select" data-msj="Seleccione un cargo" style="width:170px" required>
                  <option value="0">Seleccione un cargo</option>
                  <option value="Director / gerentes">Director / Gerente</option>
                  <option value="Profesional / Científico /Intelectual">Profesional / Científico /Intelectual</option>
                  <option value="Profesional Técnico">Profesional Técnico</option>
                  <option value="Personal de Apoyo / Auxiliar">Personal de Apoyo / Auxiliar</option>
                  <option value="Trabajador / Comerciante">Trabajador / Comerciante</option>
                  <option value="Agricultor / Pescador">Agricultor / Pescador</option>
                  <option value="Oficial / Operario / Artesano">Oficial / Operario / Artesano</option>
                  <option value="Operador / Conductor de máquinas y motores">Operador / Conductor de máquinas y motores</option>
                  <option value="Obrero / Peón">Obrero / Peón</option>
                  <option value="FFAA /Ocupaciones Militares/Policiales">FFAA /Ocupaciones Militares/Policiales</option>
                </select>
              </td>
              <td>
                <select name="A12" class="form-control au2" data-type="select" data-msj="Seleccione una opción" style="width:170px" required>
                  <option value="0">Seleccione una opción</option>
                  <option value="Si">Si</option>
                  <option value="No">No</option>
                  <option value="Mas o Menos">Mas o Menos</option>
                </select>
              </td>
            </tr>
            <tr>
              <th scope="row">B</th>
              <td><input name="B1" class="form-control" style="width:170px" type="text" required /></td>
              <td>
                <select name="B2" class="form-control au2" data-type="select" data-msj="Seleccione una opción" style="width:170px" required>
                <option value="0">Seleccione una opción</option>
                  <option value="Si">Si</option>
                  <option value="No">No</option>
                  <option value="Un Poco">Un Poco</option>
                </select>
              </td>
              <td>
                <select name="B3" class="form-control au2" data-type="select" data-msj="Seleccione un nivel" style="width:170px" required>
                  <option value="0">Seleccione un nivel</option>
                  <option value="Superior Universitario">Superior Universitario</option>
                  <option value="Superior Técnica">Superior Técnica</option>
                  <option value="Carrera Corta">Carrera Corta</option>
                  <option value="Curso">Curso</option>
                </select>
              </td>
              <td><input name="B4" type="text" class="form-control au2" data-type="select" data-msj="Seleccione una opción" style="width:170px" required /></td>
              <td>
                <select name="B5" class="form-control" style="width:170px" required>
                  <option value="0">Seleccione una opción</option>
                  <option value="Si">Si</option>
                  <option value="No">No</option>
                  <option value="Un Poco">Un Poco</option>
                </select>
              </td>
              <td>
                <select name="B6" class="form-control au2" data-type="select" data-msj="Seleccione una opción"  style="width:170px" required>
                  <option value="0">Seleccione una opción</option>
                  <option value="Si">Si</option>
                  <option value="No">No</option>
                  <option value="No estoy seguro">No estoy seguro</option>
                </select>
              </td>
              <td>
                <select name="B7" class="form-control au2" data-type="select" data-msj="Seleccione una opción" style="width:170px" required>
                  <option value="0">Seleccione una opción</option>
                  <option value="La familia">La familia</option>
                  <option value="Un prestamo">Un prestamo</option>
                  <option value="Una beca">Una beca</option>
                  <option value="Una empresa">Una empresa</option>
                  <option value="Otro">Otro</option>
                </select>
              </td>
              <td>
                <input name="B8" type="text" class="form-control au2" data-type="text" data-msj="Ingrese un valor" style="width:170px" required />
              </td>
              <td>
                <input name="B9" type="number" class="form-control au2" data-type="text" data-msj="Ingrese un valor" style="width:170px" required />
              </td>
              <td>
                <select name="B10" class="form-control au2" data-type="select" data-msj="Seleccione una opción" style="width:170px" required>
                  <option value="0">Seleccione una opción</option>
                  <option value="Sector Agropecuario">Sector Agropecuario</option>
                  <option value="Sector de Servicios">Sector de Servicios</option>
                  <option value="Sector Industrial">Sector Industrial</option>
                  <option value="Sector de Transporte">Sector de Transporte</option>
                  <option value="Sector de Comercio">Sector de Comercio</option>
                  <option value="Sector Financiero">Sector Financiero</option>
                  <option value="Sector de la Construcción">Sector de la Construcción</option>
                  <option value="Sector Minero y Energético">Sector Minero y Energético</option>
                  <option value="Sector Solidario">Sector Solidario</option>
                  <option value="Sector de Comunicaciones">Sector de Comunicaciones</option>
                </select>
              </td>
              <td>
                <select name="B11" class="form-control au2" data-type="select" data-msj="Seleccione una opción" style="width:170px" required>
                  <option value="0">Seleccione una opción</option>
                  <option value="Director / gerentes">Director / Gerente</option>
                  <option value="Profesional / Científico /Intelectual">Profesional / Científico /Intelectual</option>
                  <option value="Profesional Técnico">Profesional Técnico</option>
                  <option value="Personal de Apoyo / Auxiliar">Personal de Apoyo / Auxiliar</option>
                  <option value="Trabajador / Comerciante">Trabajador / Comerciante</option>
                  <option value="Agricultor / Pescador">Agricultor / Pescador</option>
                  <option value="Oficial / Operario / Artesano">Oficial / Operario / Artesano</option>
                  <option value="Operador / Conductor de máquinas y motores">Operador / Conductor de máquinas y motores</option>
                  <option value="Obrero / Peón">Obrero / Peón</option>
                  <option value="FFAA /Ocupaciones Militares/Policiales">FFAA /Ocupaciones Militares/Policiales</option>
                </select>
              </td>
              <td>
                <select name="B12" class="form-control au2" data-type="select" data-msj="Seleccione una opción" style="width:170px" required>
                  <option value="0">Seleccione una opción</option>
                  <option value="Si">Si</option>
                  <option value="No">No</option>
                  <option value="Mas o Menos">Mas o Menos</option>
                </select>
              </td>
            </tr>
            <tr>
              <th scope="row">C</th>
              <td><input name="C1" class="form-control au2" data-type="text" data-msj="Ingrese un valor" style="width:170px" type="text" required /></td>
              <td>
                <select name="C2" class="form-control au2" data-type="select" data-msj="Seleccione una opción" style="width:170px" required>
                  <option value="0">Seleccione una opción</option>
                  <option value="Si">Si</option>
                  <option value="No">No</option>
                  <option value="Un Poco">Un Poco</option>
                </select>
              </td>
              <td>
                <select name="C3" class="form-control au2" data-type="select" data-msj="Seleccione una opción" style="width:170px" required>
                  <option value="0">Seleccione una opción</option>
                  <option value="Superior Universitario">Superior Universitario</option>
                  <option value="Superior Técnica">Superior Técnica</option>
                  <option value="Carrera Corta">Carrera Corta</option>
                  <option value="Curso">Curso</option>
                </select>
              </td>
              <td><input name="C4" type="text" class="form-control au2" data-type="text" data-msj="Ingrese un valor" style="width:170px" required /></td>
              <td>
                <select name="C5" class="form-control au2" data-type="select" data-msj="Seleccione una opción" style="width:170px" required>
                  <option value="0">Seleccione una opción</option>
                  <option value="Si">Si</option>
                  <option value="No">No</option>
                  <option value="Un Poco">Un Poco</option>
                </select>
              </td>
              <td>
                <select name="C6" class="form-control au2" data-type="select" data-msj="Seleccione una opción" style="width:170px" required>
                <option value="0">Seleccione una opción</option>
                  <option value="Si">Si</option>
                  <option value="No">No</option>
                  <option value="No estoy seguro">No estoy seguro</option>
                </select>
              </td>
              <td>
                <select name="C7" class="form-control au2" data-type="select" data-msj="Seleccione una opción" style="width:170px" required>
                <option value="0">Seleccione una opción</option>
                  <option value="La familia">La familia</option>
                  <option value="Un prestamo">Un prestamo</option>
                  <option value="Una beca">Una beca</option>
                  <option value="Una empresa">Una empresa</option>
                  <option value="Otro">Otro</option>
                </select>
              </td>
              <td>
                <input name="C8" type="text" class="form-control au2" data-type="text" data-msj="Ingrese un valor" style="width:170px" required />
              </td>
              <td>
                <input name="C9" type="number" class="form-control au2" data-type="text" data-msj="Ingrese un valor" style="width:170px" required />
              </td>
              <td>
                <select name="C10" class="form-control au2" data-type="select" data-msj="Seleccione una opción" style="width:170px" required>
                <option value="0">Seleccione una opción</option>
                  <option value="Sector Agropecuario">Sector Agropecuario</option>
                  <option value="Sector de Servicios">Sector de Servicios</option>
                  <option value="Sector Industrial">Sector Industrial</option>
                  <option value="Sector de Transporte">Sector de Transporte</option>
                  <option value="Sector de Comercio">Sector de Comercio</option>
                  <option value="Sector Financiero">Sector Financiero</option>
                  <option value="Sector de la Construcción">Sector de la Construcción</option>
                  <option value="Sector Minero y Energético">Sector Minero y Energético</option>
                  <option value="Sector Solidario">Sector Solidario</option>
                  <option value="Sector de Comunicaciones">Sector de Comunicaciones</option>
                </select>
              </td>
              <td>
                <select name="C11" class="form-control au2" data-type="select" data-msj="Seleccione una opción" style="width:170px" required>
                <option value="0">Seleccione una opción</option>
                  <option value="Director / gerentes">Director / Gerente</option>
                  <option value="Profesional / Científico /Intelectual">Profesional / Científico /Intelectual</option>
                  <option value="Profesional Técnico">Profesional Técnico</option>
                  <option value="Personal de Apoyo / Auxiliar">Personal de Apoyo / Auxiliar</option>
                  <option value="Trabajador / Comerciante">Trabajador / Comerciante</option>
                  <option value="Agricultor / Pescador">Agricultor / Pescador</option>
                  <option value="Oficial / Operario / Artesano">Oficial / Operario / Artesano</option>
                  <option value="Operador / Conductor de máquinas y motores">Operador / Conductor de máquinas y motores</option>
                  <option value="Obrero / Peón">Obrero / Peón</option>
                  <option value="FFAA /Ocupaciones Militares/Policiales">FFAA /Ocupaciones Militares/Policiales</option>
                </select>
              </td>
              <td>
                <select name="C12" class="form-control au2" data-type="select" data-msj="Seleccione una opción" style="width:170px" required>
                <option value="0">Seleccione una opción</option>
                  <option value="Si">Si</option>
                  <option value="No">No</option>
                  <option value="Mas o Menos">Mas o Menos</option>
                </select>
              </td>
            </tr>

          </tbody>
        </table>
      </div>
      <div class="text-center" style="margin-top:10px;">
        <a href="#" data-tar="form-1" class="btn btn-primary dev-step">Atras</a>
        <input type="hidden" value="<?php echo $_SESSION["usuario"]; ?>" name="id_dusu" id="id_dusu">
        <a href="#" id="reg2" data-tar="form-3" class="btn btn-primary dev-step">Siguiente </a>
      </div>
    </form>
  </div>

  <!-- PARTE 3 -->

  <section id="form-3" class=" container dev-form ani_step">
        <div class="d-flex justify-content-center">
            <div class="shadow-lg p-3 mb-5 blue-gradient-rgba">

                <div class="modal-dialog cascading-modal modal-avatar modal-sm" role="document">
                    <!--Content-->
                    <div class="modal-content">

                        <!--Header-->
                        <div class="modal-header">
                            <img src="../assets/img/user.jpg" alt="avatar" class="rounded-circle img-responsive">
                        </div>
                        <!--Body-->
                        <div class="modal-body text-center mb-1">

                            <h5 class="mt-1 mb-2"><?php echo $_SESSION['name']; ?></h5>

                        </div>

                    </div>
                    <!--/.Content-->
                </div>
            </div>
            <div class="shadow-lg p-3 mb-5 bg-white rounded">
                <div class="text-center" style="margin:10px;">
                    <h3 class="card-title">Tu Posibilidades de Elección</h3>
                    <p class="card-text">Puedes escoger una o mas estrategias de tal manera que la suma debe ser 100.</p>
                    <h5 class="card-title">Pregunta guia: ¿Que posibilidad hay que elijas la estrategia "x".?</h5>
                </div>
                <br>
                <form method="post" action="ProPage4.php" onsubmit="return validar();">
                    <table id="eleccion" class="d-flex justify-content-center">
                        <tr>
                            <td>Estrategia </td>
                            <td>%</td>
                        </tr>
                        <tr>
                            <td>Estrategia A </td>
                            <td><input type='number' id="Eleccion_EstG1" name="EstG1" data-ide="EstG1" class='price' />%</td>
                        </tr>
                        <tr>
                            <td>Estrategia B </td>
                            <td><input type='number' id="Eleccion_EstG2" name="EstG2" data-ide="EstG2" class='price' />%</td>
                        </tr>
                        <tr>
                            <td>Estrategia C </td>
                            <td><input type='number' id="Eleccion_EstG3" name="EstG3" data-ide="EstG3" class='price' />%</td>
                        </tr>
                        <tr>
                            <td></td>
                            <td><input type='number' id="Eleccion_EstGTotal" name="EstGT" id='totalPrice' disabled></td>
                        </tr>
                    </table>
                    <div class="text-right" style="margin:10px;">
                        <a href="#" id="reg3" data-tar="form-4" class="btn btn-primary dev-step">Siguiente </a>
                        <div>
                </form>
            </div>
        </div>
    </section>



    <!-- PARTE 4 -->

    <div id="form-4" class="dev-form container justify-content-center ani_step">
    <div class="d-flex">
        <div class="shadow-lg p-3 mb-5 blue-gradient-rgba" style="width: 20rem;">
            <div class="modal-dialog cascading-modal modal-avatar modal-sm" role="document">
                <!--Content-->
                <div class="modal-content">

                    <!--Header-->
                    <div class="modal-header">
                        <img src="../assets/img/user.jpg" alt="avatar" class="rounded-circle img-responsive">
                    </div>
                    <!--Body-->
                    <div class="modal-body text-center mb-1">

                        <h5 class="mt-1 mb-2"><?php echo $_SESSION['name']; ?></h5>
                        <br>
                        <table class="d-flex justify-content-center">
                            <tr>
                                <td><strong>Estrategia A<strong> : </td>
                                <td><span id="EstG1"></span>%</td>
                            </tr>

                            <tr>
                                <td><strong>Estrategia B<strong> : </td>
                                <td><span id="EstG2"></span>%</td>
                            </tr>
                            <tr>
                                <td><strong>Estrategia C<strong> : </td>
                                <td><span id="EstG3"></span>%</td>
                            </tr>
                        </table>
                    </div>

                </div>
                <!--/.Content-->
            </div>
        </div>
        <div class="shadow-lg p-3 mb-5 bg-white rounded" style="max-width: 40rem;">
            <div class="text-center" style="margin:10px;">
                <h3 class="card-title">Tus Posibilidades de Éxito</h3>
                <p class="card-text">Ahora que ya tienes tus estrategias, debes asignarle valores de acuerdo al sistema.</p>
                <h5 class="card-title">Pregunta guía: ¿Qué posibilidades de éxito entre 0-10 le asignarias a cada estrategia?</h5>
            </div>
            <br>
            <form method="post">
                <table class="d-flex justify-content-center">
                    <tr>
                        <td>Estrategia</td>
                        <td></td>
                    </tr>

                    <tr>
                        <td>Estrategia A</td>
                        <td><input type='number' class="au3" data-type="number" data-msj="Ingrese un valor" id="EstE1" name="EstE1" max="10" /></td>
                    </tr>

                    <tr>
                        <td>Estrategia B</td>
                        <td><input type='number' class="au3" data-type="number" data-msj="Ingrese un valor" id="EstE2" name="EstE2" max="10" /></td>
                    </tr>
                    <tr>
                        <td>Estrategia C</td>
                        <td><input type='number' class="au3" data-type="number" data-msj="Ingrese un valor" id="EstE3" name="EstE3" max="10" /></td>
                    </tr>

                </table>
                <div class="text-right">
                  <a href="#" id="reg4" data-tar="form-5" class="btn btn-primary dev-step">Enviar </a>
                </div>
            </form>
        </div>
        </div>
    </div>

    <!-- PARTE 5 -->


    <div id="form-5" class="dev-form ani_step" id="content">

<hr style="height:5px; background-color:darkred;">
</hr>


<div class="container">
  <p class="text-center"><strong>RESULTADOS OBTENIDOS A PARTIR DE SUS ESTRATEGIAS </strong></p>
  <p class="text-center"><strong>VOCACIONALES Y VALORES ASIGNADOS</strong></p>

  <div class="text-left"><strong>NOMBRE:</strong> <span id="name_reg"></span><?php //echo $_SESSION['registro']['Apellidos']; ?> <?php //echo $_SESSION['registro']['Nombres']; ?></div>
  <div class="text-left"><strong>EDAD:</strong> <span id="edad_reg"></span><?php //echo $_SESSION['registro']['Edad']; ?> Años</div>
  <div class="text-left"><strong>GRADO DE INSTRUCCIÓN:</strong> <span id="grado_reg"></span> <?php // echo $_SESSION['registro']['Grado']; ?> </div>
  <div class="text-left"><strong>FECHA DE EVALUCIÓN:</strong> <?php echo date("d", $time) ?> de <?php echo date("M", $time) ?> del <?php echo date("Y", $time) ?></div>

  <p class="text-center"><strong>CONSOLIDADOS</strong></p>
  <!-- <p class="text-center">Habiéndose realizado las fases evaluativa y de información correspondiente, la familia y la evaluada desarrollaron las siguientes 3 estrategias.</p> -->
  <div class="text-left"><strong> I.- SUS ESTRATEGIAS:</strong></div>
  <br>


  <div class="table-responsive">
    <table class="table table-striped">
      <thead>
        <tr>
          <th scope="col">ITEMS ANALIZADOS</th>
          <th scope="col">Estrategia A</th>
          <th scope="col">Estrategia B</th>
          <th scope="col">Estrategia C</th>
        </tr>
      </thead>
      <tbody>
        <tr>
          <th scope="row">1.-¿Qué carrera desea estudiar mi hijo?</th>
          <td id="A1"><?php echo $_SESSION['registroTabla']['A1']; ?></td>
          <td id="B1"><?php echo $_SESSION['registroTabla']['B1']; ?></td>
          <td id="C1"><?php echo $_SESSION['registroTabla']['C1']; ?></td>
        </tr>
        <tr>
          <th scope="row">2.-¿He hablado con mi hijo de esta carrera?</th>
          <td id="A2"><?php echo $_SESSION['registroTabla']['A2']; ?></td>
          <td id="B2"><?php echo $_SESSION['registroTabla']['B2']; ?></td>
          <td id="C2"><?php echo $_SESSION['registroTabla']['C2']; ?></td>
        </tr>
        <tr>
          <th scope="row">3.-¿Qué nivel de estudios tomará mi hijo?</th>
          <td id="A3"><?php echo $_SESSION['registroTabla']['A3']; ?></td>
          <td id="B3"><?php echo $_SESSION['registroTabla']['B3']; ?></td>
          <td id="C3"><?php echo $_SESSION['registroTabla']['C3']; ?></td>
        </tr>
        <tr>
          <th scope="row">4.-¿En dónde desea estudiar mi hijo esta carrera?</th>
          <td id="A4"><?php echo $_SESSION['registroTabla']['A4']; ?></td>
          <td id="B4"><?php echo $_SESSION['registroTabla']['B4']; ?></td>
          <td id="C4"><?php echo $_SESSION['registroTabla']['C4']; ?></td>
        </tr>
        <tr>
          <th scope="row">5.-¿Mi hijo ha hecho OV para esta carrera?</th>
          <td id="A5"><?php echo $_SESSION['registroTabla']['A5']; ?></td>
          <td id="B5"><?php echo $_SESSION['registroTabla']['B5']; ?></td>
          <td id="C5"><?php echo $_SESSION['registroTabla']['C5']; ?></td>
        </tr>
        <tr>
          <th scope="row">6.-¿Lo veo como para estudiar esta carrera?</th>
          <td id="A6"><?php echo $_SESSION['registroTabla']['A6']; ?></td>
          <td id="B6"><?php echo $_SESSION['registroTabla']['B6']; ?></td>
          <td id="C6"><?php echo $_SESSION['registroTabla']['C6']; ?></td>
        </tr>
        <tr>
          <th scope="row">7.-¿Con qué ayuda cuento para la educación de mi hijo?</th>
          <td id="A7"><?php echo $_SESSION['registroTabla']['A7']; ?></td>
          <td id="B7"><?php echo $_SESSION['registroTabla']['B7']; ?></td>
          <td id="C7"><?php echo $_SESSION['registroTabla']['C7']; ?></td>
        </tr>
        <tr>
          <th scope="row">8.-¿En qué ciudad podría vivir mi hijo?</th>
          <td id="A8"><?php echo $_SESSION['registroTabla']['A8']; ?></td>
          <td id="B8"><?php echo $_SESSION['registroTabla']['B8']; ?></td>
          <td id="C8"><?php echo $_SESSION['registroTabla']['C8']; ?></td>
        </tr>
        <tr>
          <th scope="row">9.-¿Cuánto invertiría al mes en sus estudios?</th>
          <td id="A9"><?php echo $_SESSION['registroTabla']['A9']; ?></td>
          <td id="B9"><?php echo $_SESSION['registroTabla']['B9']; ?></td>
          <td id="C9"><?php echo $_SESSION['registroTabla']['C9']; ?></td>
        </tr>
        <tr>
          <th scope="row">10.-¿Qué sector laboral se ubicaría mi hijo?</th>
          <td id="A10"><?php echo $_SESSION['registroTabla']['A10']; ?></td>
          <td id="B10"><?php echo $_SESSION['registroTabla']['B10']; ?></td>
          <td id="C10"><?php echo $_SESSION['registroTabla']['C10']; ?></td>
        </tr>
        <tr>
          <th scope="row">11.-¿A qué cargo o puesto podría aspirar mi hijo?</th>
          <td id="A11"><?php echo $_SESSION['registroTabla']['A11']; ?></td>
          <td id="B11"><?php echo $_SESSION['registroTabla']['B11']; ?></td>
          <td id="C11"><?php echo $_SESSION['registroTabla']['C11']; ?></td>
        </tr>
        <tr>
          <th scope="row">12.-¿Veo a mi hijo trabajando en esto?</th>
          <td id="A12"><?php echo $_SESSION['registroTabla']['A12']; ?></td>
          <td id="B12"><?php echo $_SESSION['registroTabla']['B12']; ?></td>
          <td id="C12"><?php echo $_SESSION['registroTabla']['C12']; ?></td>
        </tr>
      </tbody>
    </table>
    <br>
    <BR>
    <div class="text-left"><strong> II.- ASIGNACIONES DE CRITERIOS ELECTIVOS :</strong>
      La evaluada y su familia asignan los siguientes valores para cada estrategia.</div>
    <BR>
    <BR>
    <table class="table table-striped">
      <thead>
        <tr>
          <th scope="col" class="text-center">ESTRATEGIAS</th>
          <th scope="col" class="text-center">ASIGNACIÓN ELECTIVA</th>
          <th scope="col" class="text-center">ESTIMADO EXITO</th>
        </tr>
      </thead>
      <tbody>
        <tr>
          <th scope="row" class="text-center">A</th>
          <td class="text-center"><span id="Est_G1"></span><?php //echo $_SESSION['registroEstG']['EstG1']; ?></td>
          <td class="text-center"><span id="Est_E1"></span><?php //echo $_SESSION['registroEstE']['EstE1']; ?></td>
        </tr>
        <tr>
          <th scope="row" class="text-center">B</th>
          <td class="text-center"><span id="Est_G2"></span><?php //echo $_SESSION['registroEstG']['EstG2']; ?></td>
          <td class="text-center"><span id="Est_E2"></span><?php //echo $_SESSION['registroEstE']['EstE2']; ?></td>
        </tr>
        <tr>
          <th scope="row" class="text-center">C</th>
          <td class="text-center"><span id="Est_G3"></span><?php //echo $_SESSION['registroEstG']['EstG3']; ?></td>
          <td class="text-center"><span id="Est_E3"></span><?php //echo $_SESSION['registroEstE']['EstE3']; ?></td>
        </tr>

      </tbody>
    </table>

    <br>
    <BR>
    <div class="text-left"><strong> III.- INDICADORES DE ÉXITO Y FRACASO POR ESTRATEGIA :</strong>
      De acuerdo a las asignaciones establecidas, el aplicativo “Decide” determinó los
      siguientes indicadores para cada estrategia.</div>
    <BR>
    <BR>
    <table class="table table-striped">
      <thead>
        <tr>
          <th scope="col" class="text-center">ESTRATEGIAS</th>
          <th scope="col" class="text-center">INDICADOR POSITIVO</th>
          <th scope="col" class="text-center">INDICADOR DESFAVORABLE</th>
        </tr>
      </thead>
      <tbody>
        <tr>
          <th scope="row" class="text-center">A</th>
          <td class="text-center"><span id="in_E1"></span><?php //echo $NFE1 ?></td>
          <td class="text-center"><span id="in_F1"></span><?php //echo $NFF1 ?></td>
        </tr>
        <tr>
          <th scope="row" class="text-center">B</th>
          <td class="text-center"><span id="in_E2"></span><?php //echo $NFE2 ?></td>
          <td class="text-center"><span id="in_F2"></span><?php //echo $NFF2 ?></td>
        </tr>
        <tr>
          <th scope="row" class="text-center">C</th>
          <td class="text-center"><span id="in_E3"></span><?php //echo $NFE3 ?></td>
          <td class="text-center"><span id="in_F3"></span><?php //echo $NFF3 ?></td>
        </tr>

      </tbody>
    </table>

    <br>
    <BR>
    <div class="text-left"><strong> IV.- CONCLUSIONES :</strong></div>
    <BR>
    <P class="text-justify">Los indicadores obtenidos se refieren a los estimados actuales del evaluado y
      su familia, son referenciales y no deben considerarse como determinantes ni absolutos
      y pueden estar sujetos a sucesos inesperados o cambios en los ítems establecidos
      y analizados así como la falta de coherencia o veracidad en la información tomada en cuenta.</P>
    <BR>

    Fecha:
    <?php
    echo date("d", $time)
    ?> <?php
        echo date("M", $time)
        ?>
    <?php
    echo date("Y", $time)
    ?>
    <BR>

    <div class="d-flex justify-content-center">
      <div class="btn btn-primary" style="margin:30px;">
        <a class="ExportToWord" style="color:white;" name="doc"><i class="fas fa-download"></i> Descargar</a>
      </div>
    </div>

  </div>
</div>
</div>
</div>


  </section>