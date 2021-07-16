<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <title>Almacenar imagen en la base de datos MySQL usando PHP</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

</head>

<body>
    <bR>
    <div class="main">
        <h1>Cargar y Almacenar imagen en MySQL PHP</h1>
        <div class="panel panel-primary">
            <div class="panel-body">

                <form name="MiForm" id="MiForm" method="post" action="acciones-admin.php?action=insertarno" enctype="multipart/form-data">
                    <h4 class="text-center">Seleccione imagen a cargar</h4>
                    <div class="form-group">
                        <label class="col-sm-2 control-label">Archivos</label>
                        <div class="col-sm-8">
                            <input type="file" class="form-control" id="imagen" name="imagen" multiple>
                        </div>
                        <label class="col-sm-2 control-label">Descripción</label>
                        <div class="col-sm-8">
                            <input type="text" id="descripcion" name="descripcion">
                        </div>
                        <label class="col-sm-2 control-label">Tipo</label>
                        <div class="col-sm-8">
                            <input type="text" id="tipo" name="tipo">
                        </div>
                        <button name="submit" class="btn btn-primary">Cargar Imagen</button>
                    </div>
                </form>


            </div>
        </div>
    </div>

</body>

</html>