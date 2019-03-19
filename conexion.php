<?php    



class conexion{
    
    protected $con;
  

	public function conexion(){


		$this->con= mysqli_connect("localhost", "root","", "prueba" ) or die ("error");



		

	}

	



}



class Registrar extends conexion{

	public function salir(){
		parent::__construct();

     $this->con->query("UPDATE `usuarios` SET `conectado`=0 WHERE `conectado`=1");
    

	}

	public function Regis($u, $p){
        
		parent::__construct();

	   $r=$this->con->query("SELECT * FROM `usuarios` WHERE usuario=\"".$u."\" ");

	   
	   $R=mysqli_fetch_row($r);
	   if(!isset($R)){
              
             
	   		$this->con->query("INSERT INTO `usuarios`(`usuario`, `contrasena`, `conectado`) VALUES (\"".$u."\",\"".$p."\", 0)");
	   		return true;

	   }else{

	   		return false;

	   }
        
	}  

	public function Ini($u, $p){
        
		parent::__construct();

	   $r=$this->con->query("SELECT * FROM `usuarios` WHERE (usuario=\"".$u."\") AND (contrasena=\"".$p."\") ");
	   $this->con->query("UPDATE `usuarios` SET `conectado`=0 WHERE `conectado`=1");
	   
	   $R=mysqli_fetch_row($r);
	   if(isset($R)){

	   		


	   		$this->con->query("UPDATE `usuarios` SET `conectado`=1 WHERE (usuario=\"".$u."\") AND (contrasena=\"".$p."\")");
	   		//echo "<script> alert(\"siiiiii\");   </script>";

	   }else{

	   		echo "<script> alert(\"usuario o contraseña incorrectos \"); location.href=\"index.php\";  </script>";


	   }
        
	}





}



class Lista extends conexion{


	

	public function nombre(){
	parent::__construct();
    $r=$this->con->query("SELECT * FROM `usuarios` WHERE `conectado`=1");

    $R=mysqli_fetch_row($r);
    //echo "<script> alert(\"".$R."\");   </script>";
    return $R[0];

	}


	public function crear($item){
	parent::__construct();


	$r=$this->con->query("INSERT INTO `items`(`nombre`, `item`) VALUES (\"".$this->nombre()."\", \"".$item."\"   )");
	



	}

	public function read(){
    
    parent::__construct();
    $r=$this->con->query("SELECT * FROM `items` WHERE `nombre`=\"".$this->nombre()."\"");
   

    while ( $R=mysqli_fetch_row($r)) {
    
    echo "  <tr>
                <td>".$R[0]."</td>
                <td>".$R[1]."</td>
                <td>".$R[2]."</td>
                <td>".$R[3]."</td>
                <td>
                	<form action='list.php' style='display:inline' method='post' >
	                	<input type='hidden' id='id' name='id' value='".$R[0]."'>   
	                    <button class='btn btn-danger btn-sm float-right' style='margin-left: 4%;' name='delete' type='submit'>D</button>
                    </form>
                    <form action='update.php' style='display:inline' method='post' >
                        <input type='hidden' id='id2' name='id2' value='".$R[0]."'> 
                        <input type='hidden' id='item2' name='item2' value='".$R[2]."'>
                	    <button class='btn btn-primary btn-sm float-right' style='margin-left: 4%;' type='submit'>U</button>
                    </form>
                    
                </td>
            </tr>";


    }

	}

	public function delete($id){
		parent::__construct();


	$r=$this->con->query("DELETE FROM `items` WHERE id=".$id);



	}

	public function update($id, $item){

	parent::__construct();


	$r=$this->con->query("UPDATE `items` SET `item`=\"".$item."\" WHERE id=".$id);




	}







}




?>