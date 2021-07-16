<?php
$accion = $_REQUEST['action'];
switch ($accion) {
    case  'EditarNosotros':
        if (isset($_POST["submit"])) {
            include('../controlador/conexion.php');
            $revisar = getimagesize($_FILES["foto2"]["tmp_name"]);
            if ($revisar) {

                $image = $_FILES['foto2']['tmp_name'];
                $id = $_POST['id2'];
                $descripcion = $_POST['descripcion2'];
                $titulo = $_POST['titulo2'];

                $imgContenido = addslashes(file_get_contents($image));
                $insertar = $cn->query("UPDATE `nosotros` SET `foto` = '$imgContenido', descripcion = '$descripcion',titulo = '$titulo'  where id_no = '$id'");
                if ($insertar) {
                    header('Location:pagedit-nosotros.php?id=' . $id . '&nt=3');
                } else {
                    echo "Ha fallado la subida, reintente nuevamente.";
                    echo mysqli_error($cn);
                }
            } else {

                $id = $_POST['id2'];
                $descripcion = $_POST['descripcion2'];
                $titulo = $_POST['titulo2'];

                $insertar = $cn->query("UPDATE `nosotros` SET  descripcion = '$descripcion',titulo = '$titulo' where id_no = '$id'");
                if ($insertar) {
                    header('Location:pagedit-nosotros.php?id=' . $id . '&nt=3');
                } else {
                    echo "Ha fallado la subida, reintente nuevamente.";
                    echo mysqli_error($cn);
                }
            }
        }
        break;
    case  'InsertarNosotros':

        include('../controlador/conexion.php');
        $revisar = getimagesize($_FILES["foto"]["tmp_name"]);
        if ($revisar) {
            $image = $_FILES['foto']['tmp_name'];
            $id = $_POST['id'];
            $descripcion = $_POST['descripcion'];
            $titulo = $_POST['titulo'];
            $tipo = $_POST['tipo'];


            $imgContenido = addslashes(file_get_contents($image));
            $insertar = $cn->query("INSERT INTO `nosotros` (`id_no`, `foto`, `descripcion`, `tipo`, `titulo`) VALUES (NULL,'$imgContenido','$descripcion','$tipo','$titulo')");
            if ($insertar) {
                header('Location:nosotros.php?nt=1');
            } else {
                header('Location:nosotros.php?nt=4');
                echo mysqli_error($cn);
            }
        } else {
            header('Location:nosotros.php?nt=6');
        }

        break;
    case  'EliminarNosotros':
        include('../controlador/conexion.php');

        $id = $_POST['id'];

        $insertar = $cn->query("DELETE FROM `nosotros` WHERE `nosotros`.`id_no` = '$id'");
        if ($insertar) {
            header('Location:nosotros.php?nt=2');
        } else {
            echo mysqli_error($cn);
        }


        break;
    case  'InsertarTutorial':
        include('../controlador/conexion.php');

        $titulo = $_POST['titulo'];
        $descripcion = $_POST['descripcion'];
        $link = $_POST['link'];

        $insertar = $cn->query("INSERT INTO `tutoriales` (`id_tu`, `titulo`, `link`, `descripcion`, `fecha_pu`) VALUES (NULL, '$titulo','$link','$descripcion',current_time)");
        if ($insertar) {
            header('Location:tutoriales.php?nt=1');
        } else {
            echo mysqli_error($cn);
        }


        break;
    case  'EliminarTutorial':
        include('../controlador/conexion.php');

        $id = $_POST['id'];

        $insertar = $cn->query("DELETE FROM `tutoriales` WHERE `tutoriales`.`id_tu` = '$id'");
        if ($insertar) {
            header('Location:tutoriales.php?nt=2');
        } else {
            echo mysqli_error($cn);
        }


        break;
    case  'EditarTutorial':

        include('../controlador/conexion.php');

        $id2 = $_POST['id2'];
        $titulo2 = $_POST['titulo2'];
        $descripcion2 = $_POST['descripcion2'];
        $link2 = $_POST['link2'];


        $insertar = $cn->query("UPDATE `tutoriales` SET `titulo` = '$titulo2', `descripcion` = '$descripcion2',`link` = '$link2' WHERE `tutoriales`.`id_tu` = '$id2'");
        if ($insertar) {
            header('Location:pagedit-tutoriales.php?id=' . $id2 . '&nt=3');
        } else {
            echo mysqli_error($cn);
        }

        break;

    case  'InsertarNoticias':

        include('../controlador/conexion.php');
        $revisar = getimagesize($_FILES["foto"]["tmp_name"]);
        if ($revisar) {
            $image = $_FILES['foto']['tmp_name'];
            $descripcion = $_POST['descripcion'];
            $titulo = $_POST['titulo'];
            $categoria = $_POST['categoria'];
            $link = $_POST['link'];

            $imgContenido = addslashes(file_get_contents($image));
            $insertar = $cn->query("INSERT INTO `noticias` (`id_ti`, `foto`, `fecha`, `titulo`, `descripcion`, `categoria`, `link`) VALUES (NULL,'$imgContenido',current_time,'$titulo','$descripcion','$categoria','$link')");
            if ($insertar) {
                header('Location:noticias.php?nt=1');
            } else {
                header('Location:noticias.php?nt=4');
                echo mysqli_error($cn);
            }
        } else {
            header('Location:noticias.php?nt=6');
        }

        break;
    case  'EditarNoticias':
        if (isset($_POST["submit"])) {
            include('../controlador/conexion.php');
            $revisar = getimagesize($_FILES["foto2"]["tmp_name"]);
            if ($revisar) {

                $image = $_FILES['foto2']['tmp_name'];
                $id = $_POST['id2'];
                $descripcion = $_POST['descripcion2'];
                $titulo = $_POST['titulo2'];
                $link = $_POST['link2'];
                $categoria = $_POST['categoria2'];

                $imgContenido = addslashes(file_get_contents($image));
                $insertar = $cn->query("UPDATE `noticias` SET `foto` = '$imgContenido', descripcion = '$descripcion',titulo = '$titulo',link = '$link' ,categoria = '$categoria' where id_ti = '$id'");
                if ($insertar) {
                    header('Location:pagedit-noticias.php?id=' . $id . '&nt=3');
                } else {
                    echo "Ha fallado la subida, reintente nuevamente.";
                    echo mysqli_error($cn);
                }
            } else {

                $id = $_POST['id2'];
                $descripcion = $_POST['descripcion2'];
                $titulo = $_POST['titulo2'];
                $link = $_POST['link2'];
                $categoria = $_POST['categoria2'];

                $insertar = $cn->query("UPDATE `noticias` SET  descripcion = '$descripcion',titulo = '$titulo',link = '$link' ,categoria = '$categoria' where id_ti= '$id'");
                if ($insertar) {
                    header('Location:pagedit-noticias.php?id=' . $id . '&nt=3');
                } else {
                    echo "Ha fallado la subida, reintente nuevamente.";
                    echo mysqli_error($cn);
                }
            }
        }
        break;
    case  'EliminarNoticias':
        include('../controlador/conexion.php');

        $id = $_POST['id'];

        $insertar = $cn->query("DELETE FROM `noticias` WHERE `noticias`.`id_ti` = '$id'");
        if ($insertar) {
            header('Location:noticias.php?nt=2');
        } else {
            echo mysqli_error($cn);
        }


        break;
}
