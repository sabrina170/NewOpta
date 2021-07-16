<?php
include('../conexion.php');
// Recepción de los datos enviados mediante POST desde el JS   
$usuario = (isset($_POST['usuario'])) ? $_POST['usuario'] : '';
$password = (isset($_POST['password'])) ? $_POST['password'] : '';
$telefono = (isset($_POST['telefono'])) ? $_POST['telefono'] : '';
$email = (isset($_POST['email'])) ? $_POST['email'] : '';
$privilegio = (isset($_POST['privilegio'])) ? $_POST['privilegio'] : '';
$fecha_registro = (isset($_POST['fecha_registro'])) ? $_POST['fecha_registro'] : '';
$id = (isset($_POST['id'])) ? $_POST['id'] : '';
$opcion = (isset($_POST['opcion'])) ? $_POST['opcion'] : '';

switch ($opcion) {
    case 1: //alta
        $consulta = "
        INSERT INTO usuarios (
            `usuario`, 
            `email`, 
            `password`, 
            `telefono`,  
            `privilegio`, 
            `fecha_registro`)
        VALUES (
             '$usuario', 
             '$email', 
             '$password', 
             '$telefono',  
             '$privilegio', 
             current_timestamp()
             ); ";

        $resultado = mysqli_query($cn, $consulta);

        $consulta_usu = "SELECT * FROM usuarios ORDER BY id DESC LIMIT 1";
        $resultado_usu = mysqli_query($cn, $consulta_usu);
        $data = mysqli_fetch_assoc($resultado_usu);
        //echo "Registro exitosa";
        break;
    case 2: //modificación
        $consulta = "UPDATE usuarios SET usuario='$usuario', password='$password', telefono='$telefono',
         email='$email', privilegio='$privilegio' WHERE id='$id' ";
        $resultado = mysqli_query($cn, $consulta);

        $consulta_usu = "SELECT * FROM usuarios WHERE id='$id' ";
        $resultado_usu = mysqli_query($cn, $consulta_usu);
        $data = mysqli_fetch_assoc($resultado_usu);

        //echo "Modificacion exitosa";

        break;
    case 3: //baja
        $consulta_usu = "DELETE FROM usuarios WHERE id='$id' ";
        $resultado_usu = mysqli_query($cn, $consulta_usu);
        //echo "Eliminado exitosa";
        break;
}

//print json_encode($data, JSON_UNESCAPED_UNICODE); //enviar el array final en formato json a JS
$conexion = NULL;
