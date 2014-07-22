<?php

class Indice extends Modelo{

    public $nombre_tabla = 'indice';
    public $pk = 'id_indice';
    
    
    public $atributos = array(
        
        'titulo'=>array(),
        'numero'=>array(),
        'id_revista'=>array()
    );
    
    public $errores = array( );
    
    private $titulo;
    private $numero;
    private $id_revista;
    
    function Indice(){
        parent::Modelo();
    }
    
    public function get_atributos(){
        $rs = array();
        foreach ($this->atributos as $key => $value) {
            $rs[$key]=$this->$key;
        }
        return $rs;
    }
    
    
    public function get_titulo(){

        return $this->titulo;
    } 

    public function set_titulo($valor){

        $er=new ER();
        if(!$er->valida_alfanumericos($valor)){
            $this->errores[] = "Este indice (".$valor.") no es valido";          
        }
            $this->titulo = trim($valor);
        
    }

	public function get_numero(){

        return $this->numero;
    } 

    public function set_numero($valor){

        $er=new ER();
        if(!$er->valida_numericos($valor)){
            $this->errores[] = "Este numero (".$valor.") no es valido";
            
        }
            $this->numero = trim($valor);
        
    }
	
    public function get_id_revista(){

        return $this->id_revista;
    } 

    public function set_id_revista($valor){

        $er=new ER();
        if(!$er->valida_campo_no_vacio($valor)){
            $this->errores[] = "Este articulo (".$valor.") no es valido";
            
        }

            $this->id_revista = trim($valor);
        
    }

	
    
    
}

?>
