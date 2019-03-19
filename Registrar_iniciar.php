<?php    


require "conexion.php";
	$r=new Registrar;

if(isset($_POST["Registrar"])){ 

	if($_POST["usuario"]!="" && $_POST["password"]!=""){ 
		
    	
    

    	$b=$r->Regis($_POST["usuario"], $_POST["password"]);
       
    	if($b){ $r->Ini($_POST["usuario"], $_POST["password"]);  echo "<script>  location.href=\"crud/list.php\";  </script>";  }
    	else{echo "<script> alert(\"ese usuario ya está registrado\");   location.href=\"index.php\";  </script>";  }


	}

}
else if(isset($_POST["Entrar"])){

	if($_POST["usuario"]!="" && $_POST["password"]!=""){ 
		
    	
    

    	$r->Ini($_POST["usuario"], $_POST["password"]);
    	echo "<script>  location.href=\"crud/list.php\";  </script>";

	}


}



?>