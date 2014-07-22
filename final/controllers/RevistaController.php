<?php
	class RevistaController extends Revista{	
		public $muestra_errores = false;//se pone en cierto cuando se encuentre un error

		function __construct(){
			 parent::Revista();
		}
		
		public function insertaRevista($datos,$archivos){
			
			/*echo "<pre>datos:";
			print_r($datos);
			print_r($archivos);
			echo "</pre>";*/
			//die();

			//$revista=new Revista();//se prueba conexion
			$this->set_nombre($datos['nombre']);
			$this->set_portada($archivos['portada']);//settea arreglo y valida la imagen
			$this->set_fecha($datos['fecha']);
			$this->set_volumen($datos['volumen']);
			$this->set_titulo($datos['titulo']);
			$this->set_subtitulo($datos['subtitulo']);
			$this->set_numero($datos['numero']);
			$this->set_clave($datos['clave']);
			$this->set_directorio($datos['directorio']);
			$this->set_editorial($datos['editorial']);
			$this->set_id_status($datos['id_status']);

			if(count($this->errores)>0){
			
				$this->muestra_errores = true;
				
			}else{
	
			$this->inserta($this->get_atributos());

			}
				
		}
		
		
		 public function getDropDown($tabla,$name,$id,$where = ' '){
        $rs = $this->consulta_sql(" select * from $tabla ".$where);
        $rows = $rs->GetArray();
        $dropDown = '<select class="form-control" id="'.$id.'" name="'.$name.'">';
        foreach ($rows as $key => $value) {
            $dropDown.= '<option value="'.$value['id_status'].'">'.utf8_encode($value['id_status']).'</option>';
        }
        $dropDown.= '</select>';    
        return $dropDown;
		} 

		public function validaUsuario($datos){
			$rs = $this->consulta_sql(" select * from usuarios where email = '".$datos['email']."'  ");
        	$rows = $rs->GetArray();
        	if(count($rows) > 0){
        		if ($rows['0']['password']== md5($datos['password'])) {
        			$this->iniciarSesion($rows['0']['rol'],$rows['0']['email']);
        		}else{
		     		$this->muestra_errores = true;
		     		$this->errores[] = 'Password incorrecto';
		     	}
	     	}else{
	     		$this->muestra_errores = true;
	     		$this->errores[] = 'este email no existe';
	     	}

		}

		public function iniciarSesion($rol,$email){
			$_SESSION['user'] = $rol;
			$_SESSION['email'] = $email;
			header("Location: inicio.php");
		}

		public function cerrarSesion(){
			session_destroy();
			header("Location: inicio.php");
		}

	}


?>