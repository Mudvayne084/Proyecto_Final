<?php
	class AutorController extends Autor{
		
		public $muestra_errores = false;
		function __construct(){
			 parent::Autor();
		}
		
		public function insertaAutor($datos){
			
			//echo "<pre>datos:";
			//print_r($datos);
			//echo "</pre>";
			//$this=new Autor();//se prueba conexion
			
			$this->set_nombre($datos['nombre']);
			$this->set_apellidos($datos['apellidos']);
			$this->set_email($datos['email']);

			if(count($this->errores)>0){
				$this->muestra_errores=true;
				//print_r($autor->errores);
			}else
			{
				$this->inserta($this->get_atributos());
			}
			
			//die();//detieene o mata todo el script.
             //$autor->inserta($autor->get_atributos());

		}

		
		//public function validaUsuario($datos){
			//$rs = $this->consulta_sql(" select * from usuarios where email = '".$datos['email']."'  ");
        	//$rows = $rs->GetArray();
        	//if(count($rows) > 0){
        		//if ($rows['0']['password']== md5($datos['password'])) {
        			//$this->iniciarSesion($rows['0']['rol'],$rows['0']['email']);
        		//}else{
		     		//$this->muestra_errores = true;
		     		//$this->errores[] = 'Password incorrecto';
		     	//}
	     	//}else{
	     		//$this->muestra_errores = true;
	     		//$this->errores[] = 'este email no existe';
	     	//}
		//}
		
		

		//public function iniciarSesion($rol,$email){
		//	$_SESSION['user'] = $rol;
		//	$_SESSION['email'] = $email;
		//	header("Location: inicio.php");
		//}

		//public function cerrarSesion(){
		//	session_destroy();
		//	header("Location: inicio.php");
		//}

	}


?>