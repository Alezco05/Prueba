<?php

require_once 'conexion.php';
require_once 'model.php';
class Correo 
{   
   	public function registroEmail(){

		if(isset($_POST["nombre"])){

            if(preg_match(('/^[a-zA-Z0-9]*$/'), $_POST["nombre"]) && 
             preg_match(('/^[a-zA-Z0-9]*$/'), $_POST["mensaje"])
             && preg_match(('/^[^\s@]+@[^\s@]+\.[^\s@]+$/'), $_POST["email"])
              ) 
			{
				$datosController = array( "nombre"=>$_POST["nombre"], 
				"mensaje"=>$_POST["mensaje"],
				"email"=>$_POST["email"]);
				
				$respuesta = Datos::registroMensajes($datosController, "contactos");
				
				if($respuesta == "success"){
					//$asunto = "Email de prueba";
					//mail($_POST["email"],$asunto,$_POST["mensaje"],$_POST["nombre"]); 
					header("location:index.php");
				}
				else{
					header("location:error.html");
			}
			
		}
	}

	}
}




?>
