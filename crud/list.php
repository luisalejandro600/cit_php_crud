<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/bootstrap-grid.min.css">
    <link rel="stylesheet" href="css/bootstrap-reboot.min.css">
    <link rel="stylesheet" type="text/css" href="css/style.css">

    <title>Iniciar Sesion</title>
</head>
<body>  
    <?php   require "../conexion.php"; $lista= new Lista;  

     if(isset($_POST["delete"])){
      
        $lista->delete($_POST["id"]);



     }   
     if(isset($_POST["crear"])){
        
        $lista->crear($_POST["item"]);
        header("Location:list.php");
     }
     if(isset($_POST["update"])){
       
        $lista->update($_POST["id"],$_POST["item"]);
        header("Location:list.php");
     }


    ?>

    <div class="titulo">   <h1>Hola! <?php echo " ".$lista->nombre().""; ?> </h1> </div>
    <div class="container" style="margin-top:4%;">
        
        
        <div class="float-right" style="margin-bottom:2%;">
            <form action="create.html" style='display:inline'>
                <button class="btn btn-primary" type="submit">Create</button>            
            </form>
            <form action="../index.php" method="post" style='display:inline'>
                <button class="btn btn-primary" name="salir" type="submit">Salir</button>            
            </form>

               
        </div>
        <table class="table table-dark">
            <thead class="thead-light">
                <tr>
                    <th>id</th>
                    <th>Usuario</th>
                    <th>Item</th>
                    <th>Fecha</th>
                    <th></th>
                </tr>
            </thead>
            <tbody>
                
            <?php  $lista->read();     ?>

            </tbody>
        </table>
    </div>
</body>
</html>