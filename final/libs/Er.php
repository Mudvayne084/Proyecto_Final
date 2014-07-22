<?php

class Er {
    
	public function valida_email($valor){
		$exp_reg = '/^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.[a-z]{2,3})$/'; 
		if (preg_match($exp_reg, $valor)) {
		     return true;
		} else { 
		     return false;
		} 
	}

     /*public function valida_alfanumericos($valor){
		if (!ereg("^[a-zA-Z0-9 ]+$",$valor)) {
		 
		 return false;
		}else {
		// Su código o una confirmación
		 
		 return true;
     } 
}*/

      public function valida_alfanumericos($valor){
        if (preg_match("/^[[:alnum:]]+$/", $valor)) {
            return true;
        }else {
            //print "<p>La cadena $valor no es númerica.</p>\n";
            return false;
        }
     }

      /*public function valida_numericos($valor){
			if(!ereg("^[0-9]+$",$valor)){
			 
			 return false;
			}else {
			// Su código o una confirmación
			 return true;
			}
    }*/

     public function valida_numericos($valor){
        if (preg_match("/^[[:digit:]]+$/", $valor)) {
            return true;
        }else {
            //print "<p>La cadena $valor no es númerica.</p>\n";
            return false;
        }
     }


      public function valida_url($valor){
			if (ereg("^[a-zA-Z0-9\-\.]+\.(com|org|net|mil|edu)$",$valor)) {
		   
		   return true;
		   }  else { 
		   	return false;

      }
}

	public function valida_nombre($valor){
        if(preg_match("/^([a-zA-ZñÑ\s]{2,50})+$/",$valor)){
                return true;
            }else{
                return false;
            }
    }

        public function valida_username($valor){
        if(preg_match("/^([a-zA-Z0-9])+$/",$valor))
            return true;
            else{
                return false;
            }
    }

     public function valida_password($valor){
        if(preg_match("/^([A-Za-z0-9_+,.:.,=?();!#$%&*<>-])+$/",$valor))
        {
          return true;
        }
            else{
                return false;
            }
    }

    public function valida_rfc($valor){
        if(preg_match("/^([A-Z,Ã‘,&]{3,4}[0-9]{2}[0-1][0-9][0-3][0-9][A-Z,0-9]?[A-Z,0-9]?[0-9,A-Z]?)+$/",$valor))
                return true;
            else{
                return false;
            }
    }

     public function valida_cp($valor){     
        if(preg_match("/^(^([1-9]{2}|[0-9][1-9]|[1-9][0-9])[0-9]{3}$)+$/",$valor))
                return true;
            else{
                return false;
            }
    }

       public function valida_campo_no_vacio($valor){
        if(empty($valor)){
            //print_r('campo vacio');
            return false;
        }else{
            
            //print_r('campo no vacio');
            return true;
        }    

    }

    public function valida_tipo($valor){
     //if(isset($_POST['aceptar10'])){    
    $mime = array('image/jpg', 'image/jpeg','image/png');
    # Buscamos si el archivo que subimos tiene el MIME type que permitimos en nuestra subida
    if( !in_array( $valor, $mime))
    {    
        //print_r('<p>Ups! Solamente puedes subir imágenes con la extensión JPG, JPEG, o PNG</p>');

        return true;
    }else{
        //print_r('<p>la imagen es correcta! el valor de:'.$valor.' es valido</p>');
        return false;
    }
 //}

}

        public function valida_PDF($valor){
             //if(isset($_POST['aceptar10'])){    
            $mime = array('application/pdf');
            # Buscamos si el archivo que subimos tiene el MIME type que permitimos en nuestra subida
            if( !in_array( $valor, $mime))
            {
                //print_r('<p>Ups! Solamente puedes subir archivos con extension PDF</p>');

                return true;
            }else{
                //print_r('<p>el archivo es correcto! el archivo:'.$valor.' es valido</p>');
                return false;
            }
         //}

        }
    
    public function valida_tamanio($valor){
    # Indicamos hasta que peso de archivo puede subir el usuario. Tamaño maximo que se aceptara ser de 5mb.
    if( $valor < 5500000) //4.8 Mb  
    {
        
        //print_r('<p>El archivo que subio esta dentro del limite:'.$valor.' entro en el if</p>');
        return true;
        
    }else{
        //print_r('<p>el archivo esta pesado:'.$valor.' bajale, entro al if</p>');
        return false;

    }

}

    public function valida_curp($valor){  
        if(preg_match("/^(^.*(?=.{18})(?=.*[0-9])(?=.*[A-ZÃ‘]).*$)+$/",$valor))
                return true;
            else{
                return false;
            }
    }

        public function valida_telefono($valor){ 
        if(preg_match("/^(^\+?\d{1,3}?[- .]?\(?(?:\d{2,3})\)?[- .]?\d\d\d[- .]?\d\d\d\d$)+$/",$valor))
                return true;
            else{
                return false;
            }
    }

    public function valida_tarjeta($valor){
        if(preg_match("/^(^((67\d{2})|(4\d{3})|(5[1-5]\d{2})|(6011))(-?\s?\d{4}){3}|(3[4,7])\ d{2}-?\s?\d{6}-?\s?\d{5}$)+$/",$valor))
                return true;
            else{
                return false;
            }
    }

        public function valida_fecha($valor){
        if(preg_match("/^(^\d{1,2}\/\d{1,2}\/\d{2,4}$)+$/",$valor))
                return true;
            else{
                return false;
            }
    }

     public function valida_hora($valor){  
        if(preg_match("/^(^[0-2][0-3]:[0-5][0-9]$)+$/",$valor))
                return true;
            else{
                return false;
            }
    }

}

?>    