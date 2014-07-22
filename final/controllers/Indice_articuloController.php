<?php
	class Indice_articuloController extends Indice_articulo{
		
		public $muestra_errores = false;
		function __construct(){
			 parent::Indice_articulo();
		}
		
		public function insertaIndice_articuloController($datos){
			
			
			
			$this->set_id_indice($datos['id_indice']);
			$this->set_id_articulo($datos['id_articulo']);
			$this->set_numero($datos['numero']);

			if(count($this->errores)>0){
				$this->muestra_errores=true;
				
			}else
			{
				$this->inserta($this->get_atributos());
			}

		}
		
		  public function getDropDown($tabla,$name,$id,$where = ' '){
        $rs = $this->consulta_sql(" select * from $tabla ".$where);
        $rows = $rs->GetArray();
        $dropDown = '<select class="form-control" id="'.$id.'" name="'.$name.'">';
        foreach ($rows as $key => $value) {
            $dropDown.= '<option value="'.$value['id_indice'].'">'.utf8_encode($value['id_indice']).'</option>';
        }
        $dropDown.= '</select>';    
        return $dropDown;
		} 
		
		public function getDropDown1($tabla,$name,$id,$where = ' '){
        $rs = $this->consulta_sql(" select * from $tabla ".$where);
        $rows = $rs->GetArray();
        $dropDown = '<select class="form-control" id="'.$id.'" name="'.$name.'">';
        foreach ($rows as $key => $value) {
            $dropDown.= '<option value="'.$value['id_articulo'].'">'.utf8_encode($value['id_articulo']).'</option>';
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