<?php 
$id_test = $_GET['ide'];
require('controlador/conexion.php');
$consulta = "SELECT  * FROM `test` where id_test='$id_test'";
$resultado =mysqli_query($cn, $consulta);
$data = mysqli_fetch_assoc($resultado);
$time =  time();

?>

<section>
<div id="form-5" class="ani_step" id="content">

<hr style="height:5px; background-color:darkred;">
</hr>


<div class="container">
  <p class="text-center"><strong>RESULTADOS OBTENIDOS A PARTIR DE SUS ESTRATEGIAS </strong></p>
  <p class="text-center"><strong>VOCACIONALES Y VALORES ASIGNADOS</strong></p>

  <div class="text-left"><strong>NOMBRE:</strong> <span id="name_reg"></span><?php echo $data['nombres'] . " " . $data['apellidos']//echo $_SESSION['registro']['Apellidos']; ?> <?php //echo $_SESSION['registro']['Nombres']; ?></div>
  <div class="text-left"><strong>EDAD:</strong> <span id="edad_reg"></span><?php echo $data['edad']//echo $_SESSION['registro']['Edad']; ?> Años</div>
  <div class="text-left"><strong>GRADO DE INSTRUCCIÓN:</strong> <span id="grado_reg"></span> <?php echo $data['grado']// echo $_SESSION['registro']['Grado']; ?> </div>
  <!--<div class="text-left"><strong>FECHA DE EVALUCIÓN:</strong> <?php echo date("d", $time) ?> de <?php echo date("M", $time) ?> del <?php echo date("Y", $time) ?></div>-->
  <div class="text-left"><strong>FECHA DE EVALUCIÓN:</strong> <?php echo  $data['fecha_registro']?></div>

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
          <td id="A1"><?php echo $data['PreA_1']; ?></td>
          <td id="B1"><?php echo $data['PreB_1']; ?></td>
          <td id="C1"><?php echo $data['PreC_1']; ?></td>
        </tr>
        <tr>
          <th scope="row">2.-¿He hablado con mi hijo de esta carrera?</th>
          <td id="A2"><?php echo $data['PreA_2']; ?></td>
          <td id="B2"><?php echo $data['PreB_2']; ?></td>
          <td id="C2"><?php echo $data['PreC_2']; ?></td>
        </tr>
        <tr>
          <th scope="row">3.-¿Qué nivel de estudios tomará mi hijo?</th>
          <td id="A3"><?php echo $data['PreA_3']; ?></td>
          <td id="B3"><?php echo $data['PreB_3']; ?></td>
          <td id="C3"><?php echo $data['PreC_3']; ?></td>
        </tr>
        <tr>
          <th scope="row">4.-¿En dónde desea estudiar mi hijo esta carrera?</th>
          <td id="A4"><?php echo $data['PreA_4']; ?></td>
          <td id="B4"><?php echo $data['PreB_4']; ?></td>
          <td id="C4"><?php echo $data['PreC_4']; ?></td>
        </tr>
        <tr>
          <th scope="row">5.-¿Mi hijo ha hecho OV para esta carrera?</th>
          <td id="A5"><?php echo $data['PreA_5']; ?></td>
          <td id="B5"><?php echo $data['PreB_5']; ?></td>
          <td id="C5"><?php echo $data['PreC_5']; ?></td>
        </tr>
        <tr>
          <th scope="row">6.-¿Lo veo como para estudiar esta carrera?</th>
          <td id="A6"><?php echo $data['PreA_6']; ?></td>
          <td id="B6"><?php echo $data['PreB_6']; ?></td>
          <td id="C6"><?php echo $data['PreC_6']; ?></td>
        </tr>
        <tr>
          <th scope="row">7.-¿Con qué ayuda cuento para la educación de mi hijo?</th>
          <td id="A7"><?php echo $data['PreA_7']; ?></td>
          <td id="B7"><?php echo $data['PreB_7']; ?></td>
          <td id="C7"><?php echo $data['PreC_7']; ?></td>
        </tr>
        <tr>
          <th scope="row">8.-¿En qué ciudad podría vivir mi hijo?</th>
          <td id="A8"><?php echo $data['PreA_8']; ?></td>
          <td id="B8"><?php echo $data['PreB_8']; ?></td>
          <td id="C8"><?php echo $data['PreC_8']; ?></td>
        </tr>
        <tr>
          <th scope="row">9.-¿Cuánto invertiría al mes en sus estudios?</th>
          <td id="A9"><?php echo $data['PreA_9']; ?></td>
          <td id="B9"><?php echo $data['PreB_9']; ?></td>
          <td id="C9"><?php echo $data['PreC_9']; ?></td>
        </tr>
        <tr>
          <th scope="row">10.-¿Qué sector laboral se ubicaría mi hijo?</th>
          <td id="A10"><?php echo $data['PreA_10']; ?></td>
          <td id="B10"><?php echo $data['PreB_10']; ?></td>
          <td id="C10"><?php echo $data['PreC_10']; ?></td>
        </tr>
        <tr>
          <th scope="row">11.-¿A qué cargo o puesto podría aspirar mi hijo?</th>
          <td id="A11"><?php echo $data['PreA_11']; ?></td>
          <td id="B11"><?php echo $data['PreB_11']; ?></td>
          <td id="C11"><?php echo $data['PreC_11']; ?></td>
        </tr>
        <tr>
          <th scope="row">12.-¿Veo a mi hijo trabajando en esto?</th>
          <td id="A12"><?php echo $data['PreA_12']; ?></td>
          <td id="B12"><?php echo $data['PreB_12']; ?></td>
          <td id="C12"><?php echo $data['PreC_12']; ?></td>
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
          <td class="text-center"><span id="Est_G1"></span><?php echo $data['EstG1'];//echo $_SESSION['registroEstG']['EstG1']; ?></td>
          <td class="text-center"><span id="Est_E1"></span><?php echo $data['EstE1'];//echo $_SESSION['registroEstE']['EstE1']; ?></td>
        </tr>
        <tr>
          <th scope="row" class="text-center">B</th>
          <td class="text-center"><span id="Est_G2"></span><?php echo $data['EstG2'];//echo $_SESSION['registroEstG']['EstG2']; ?></td>
          <td class="text-center"><span id="Est_E2"></span><?php echo $data['EstE2'];//echo $_SESSION['registroEstE']['EstE2']; ?></td>
        </tr>
        <tr>
          <th scope="row" class="text-center">C</th>
          <td class="text-center"><span id="Est_G3"></span><?php echo $data['EstG3'];//echo $_SESSION['registroEstG']['EstG3']; ?></td>
          <td class="text-center"><span id="Est_E3"></span><?php echo $data['EstE3'];//echo $_SESSION['registroEstE']['EstE3']; ?></td>
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
          <td class="text-center"><span id="in_E1"></span><?php echo $data['Exito_A'];//echo $NFE1 ?></td>
          <td class="text-center"><span id="in_F1"></span><?php echo $data['Fracaso_A'];//echo $NFF1 ?></td>
        </tr>
        <tr>
          <th scope="row" class="text-center">B</th>
          <td class="text-center"><span id="in_E2"></span><?php echo $data['Exito_B'];//echo $NFE2 ?></td>
          <td class="text-center"><span id="in_F2"></span><?php echo $data['Fracaso_B'];//echo $NFF2 ?></td>
        </tr>
        <tr>
          <th scope="row" class="text-center">C</th>
          <td class="text-center"><span id="in_E3"></span><?php echo $data['Exito_C']//echo $NFE3 ?></td>
          <td class="text-center"><span id="in_F3"></span><?php echo $data['Fracaso_C'];//echo $NFF3 ?></td>
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
        <a class="ExportToWord" id="exportar-test" href="#" style="color:white;" name="doc"><i class="fas fa-download"></i> Descargar</a>
      </div>
    </div>

  </div>
</div>
</div>
</div>


  </section>