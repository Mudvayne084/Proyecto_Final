<?php
	class IndiceController extends Indice{
		
		public $muestra_errores = false;
		function __construct(){
			 parent::Indice();
		}
		
		public function insertaIndiceController($datos){
			
			
			
			$this->set_titulo($datos['titulo']);
			$this->set_numero($datos['numero']);
			$this->set_id_revista($datos['id_revista']);

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
            $dropDown.= '<option value="'.$value['id_revista'].'">'.utf8_encode($value['id_revista']).'</option>';
        }
        $dropDown.= '</select>';    
        return $dropDown;
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