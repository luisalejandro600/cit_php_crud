<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Update</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/bootstrap-grid.min.css">
    <link rel="stylesheet" href="css/bootstrap-reboot.min.css">
</head>
<body>
    <?php require "../conexion.php";   ?>
    <div class="container-fluid" style="height: 100vh;">
            <div class="d-flex flex-column" style="justify-content: center;align-items:center;height: 100%;">
                <div class="col-sm-6 col-lg-5 border border-primary">
                    <div class="d-flex flex-column" style="justify-content: center;align-items: center;height: 100%;">
                        <h3>Editar Item</h3>
                        <form action="list.php" method="post" class="form-group">
                           
                          <?php echo" <input id='item' name='item' class='form-control' value='".$_POST["item2"]."' type='text'> 
                                      <input type='hidden' id='id' name='id' value='".$_POST["id2"]."'>" 

                          ?>
                            
                            <button class="btn btn-primary float-right" name="update" type="submit"  style="margin-top: 6%; margin-left: 25%;">Actualizar</button>
                        </form> 

                    </div>
                </div>
            </div>
        </div>
</body>
</html>