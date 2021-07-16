<?php 
session_start();
$accion= $_POST['accion'];

switch ($accion) {
	case  'validar':

        include('conexion.php');

        $usuario = $_POST['usuario'];
        $psw = $_POST['password'];

        $log = ("SELECT * FROM `usuarios` WHERE usuario ='$usuario' AND `password` = '$psw'");
        
        $resultado = mysqli_query($cn, $log);
        $existe = mysqli_num_rows($resultado);
        $row = mysqli_fetch_array($resultado);

        $_SESSION['usuario'] = $row['id'];
        $_SESSION['name'] = $row['usuario'];
        $_SESSION['privilegio'] = $row['privilegio'];

        if ($existe > 0) {
            echo $row['privilegio'];
        }else
        {
            echo 0 ;
        } 
    break;

    case  'GuardarTest':

        include('conexion.php');

        // DATOS USUARIO 
        $nombre = $_POST['nombre'];
        $apellidos = $_POST['apellidos'];
        $edad = $_POST['edad'];
        $grado = $_POST['grado'];

        // DATOS TABLA 
        $Pre1A  = $_POST['Pre1A'];
        $Pre2A  = $_POST['Pre2A'];
        $Pre3A  = $_POST['Pre3A'];
        $Pre4A  = $_POST['Pre4A'];
        $Pre5A  = $_POST['Pre5A'];
        $Pre6A  = $_POST['Pre6A'];
        $Pre7A  = $_POST['Pre7A'];
        $Pre8A  = $_POST['Pre8A'];
        $Pre9A  = $_POST['Pre9A'];
        $Pre10A = $_POST['Pre10A']; 
        $Pre11A = $_POST['Pre11A']; 
        $Pre12A = $_POST['Pre12A']; 

        $Pre1B  = $_POST['Pre1B']; 
        $Pre2B  = $_POST['Pre2B']; 
        $Pre3B  = $_POST['Pre3B']; 
        $Pre4B  = $_POST['Pre4B']; 
        $Pre5B  = $_POST['Pre5B']; 
        $Pre6B  = $_POST['Pre6B']; 
        $Pre7B  = $_POST['Pre7B']; 
        $Pre8B  = $_POST['Pre8B']; 
        $Pre9B  = $_POST['Pre9B']; 
        $Pre10B =  $_POST['Pre10B']; 
        $Pre11B =  $_POST['Pre11B']; 
        $Pre12B =  $_POST['Pre12B']; 

        $Pre1C = $_POST['Pre1C']; 
        $Pre2C = $_POST['Pre2C']; 
        $Pre3C = $_POST['Pre3C']; 
        $Pre4C = $_POST['Pre4C']; 
        $Pre5C = $_POST['Pre5C']; 
        $Pre6C = $_POST['Pre6C']; 
        $Pre7C = $_POST['Pre7C']; 
        $Pre8C = $_POST['Pre8C']; 
        $Pre9C = $_POST['Pre9C']; 
        $Pre10C=  $_POST['Pre10C']; 
        $Pre11C=  $_POST['Pre11C']; 
        $Pre12C=  $_POST['Pre12C']; 

        $EstE1 = $_POST['EstE1'];
        $EstE2 = $_POST['EstE2'];
        $EstE3 = $_POST['EstE3'];

        $EstG1 = $_POST['EstG1'];
        $EstG2 = $_POST['EstG2'];
        $EstG3 = $_POST['EstG3'];


        // RESULTADOS
        $NFE1 =  $_POST['NFE1'];
        $NFF1 =  $_POST['NFF1'];
        $NFE2 =  $_POST['NFE2'];
        $NFF2 =  $_POST['NFF2'];
        $NFE3 =  $_POST['NFE3'];
        $NFF3 =  $_POST['NFF3'];

        // ID USUARIO 
        $id_usu = $_POST['id_usu'];

        $consulta = ("
            INSERT INTO `test`(
                `id_test`, 
                `id_usu`,
                `nombres`, 
                `apellidos`, 
                `edad`, 
                `grado`,
                `PreA_1`, 
                `PreA_2`, 
                `PreA_3`, 
                `PreA_4`, 
                `PreA_5`, 
                `PreA_6`, 
                `PreA_7`, 
                `PreA_8`, 
                `PreA_9`, 
                `PreA_10`, 
                `PreA_11`, 
                `PreA_12`,
                `PreB_1`, 
                `PreB_2`, 
                `PreB_3`, 
                `PreB_4`, 
                `PreB_5`, 
                `PreB_6`, 
                `PreB_7`, 
                `PreB_8`, 
                `PreB_9`, 
                `PreB_10`, 
                `PreB_11`, 
                `PreB_12`,
                `PreC_1`, 
                `PreC_2`, 
                `PreC_3`, 
                `PreC_4`, 
                `PreC_5`, 
                `PreC_6`, 
                `PreC_7`, 
                `PreC_8`, 
                `PreC_9`, 
                `PreC_10`, 
                `PreC_11`, 
                `PreC_12`,
                `EstG1`,
                `EstG2`,
                `EstG3`,
                `EstE1`,
                `EstE2`,
                `EstE3`,
                `Estrategia_A`, 
                `Exito_A`, 
                `Fracaso_A`,
                `Estrategia_B`, 
                `Exito_B`, 
                `Fracaso_B`,
                `Estrategia_C`, 
                `Exito_C`, 
                `Fracaso_C`,
                `fecha_registro`) 
            VALUES (
                '0',
                '$id_usu',
                '$nombre',
                '$apellidos',
                '$edad',
                '$grado',
                '$Pre1A', 
                '$Pre2A', 
                '$Pre3A', 
                '$Pre4A', 
                '$Pre5A', 
                '$Pre6A', 
                '$Pre7A', 
                '$Pre8A', 
                '$Pre9A', 
                '$Pre10A',
                '$Pre11A',
                '$Pre12A',
                '$Pre1B', 
                '$Pre2B', 
                '$Pre3B', 
                '$Pre4B', 
                '$Pre5B', 
                '$Pre6B', 
                '$Pre7B', 
                '$Pre8B', 
                '$Pre9B', 
                '$Pre10B',
                '$Pre11B',
                '$Pre12B',
                '$Pre1C', 
                '$Pre2C', 
                '$Pre3C', 
                '$Pre4C', 
                '$Pre5C', 
                '$Pre6C', 
                '$Pre7C', 
                '$Pre8C', 
                '$Pre9C', 
                '$Pre10C',
                '$Pre11C',
                '$Pre12C',
                '$EstG1',
                '$EstG2',
                '$EstG3',
                '$EstE1',
                '$EstE2',
                '$EstE3',
                'A',
                '$NFE1',
                '$NFF1',
                'B',
                '$NFE2',
                '$NFF2',
                'C',
                '$NFE3',
                '$NFF3',
                SYSDATE()
                )");
        
        $resultado = mysqli_query($cn, $consulta);
        if ($resultado) {
            echo 1;
        }else
        {
            echo mysqli_error($cn) ;
        } 
    break;
    }
?>