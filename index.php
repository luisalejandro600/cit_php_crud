<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="vendor/css/bootstrap.min.css">
    <link rel="stylesheet" href="vendor/css/bootstrap-grid.min.css">
    <link rel="stylesheet" href="vendor/css/bootstrap-reboot.min.css">
 
    <script type="text/javascript"></script>
    <title>Iniciar Sesion</title>
</head>
<body>
<?php  require "conexion.php"; $salir= new Registrar; if(isset($_POST["salir"])){$salir->salir();}   ?>

    <div class="container-fluid" style="height: 100vh;">
        <div class="d-flex flex-column" style="justify-content: center;align-items:center;height: 100%;">
            <div class="col-sm-6 col-lg-5 border border-primary">
                <div class="d-flex flex-column" style="justify-content: center;align-items: center;height: 100%;">
                    <h3>Iniciar Sesion</h3>
                    <form action="Registrar_iniciar.php" method="post"  class="form-group">
                        <label for="usuario">Usuario</label>
                        <input id="usuario" name="usuario" class="form-control" type="text">
                        <label for="nombre">Contrasena</label>
                        <input id="password" name="password" class="form-control" type="text">
                        <button class="btn btn-primary float-right" id="Entrar" name="Entrar" type="submit" 
                        style="margin-top: 6%; margin-left: 5%; float: none;">Entrar</button>

                        <button class="btn btn-primary float-right" id="Registrar" name="Registrar" type="submit" 
                        style="margin-top: 6%; margin-left: 5%; float: none;">Registrar</button>
                        
                    </form> 
                </div>
            </div>
        </div>
    </div>
</body>
</html>