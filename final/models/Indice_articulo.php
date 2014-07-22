<?php

class Indice_articulo extends Modelo{

    public $nombre_tabla = 'indice_articulo';
    public $pk = 'id_indice_articulo';
    
    
    public $atributos = array(
        
        'id_indice'=>array(),
        'id_articulo'=>array(),
        'numero'=>array()
    );
    
    public $errores = array( );
    
    private $id_indice;
    private $id_articulo;
    private $numero;
    
    function Indice_articulo(){
        parent::Modelo();
    }
    
    public function get_atributos(){
        $rs = array();
        foreach ($this->atributos as $key => $value) {
            $rs[$key]=$this->$key;
        }
        return $rs;
    }
    
    
    public function get_id_indice(){

        return $this->id_indice;
    } 

    public function set_id_indice($valor){

        $er=new ER();
        if(!$er->valida_campo_no_vacio($valor)){
            $this->errores[] = "Este indice (".$valor.") no es valido";          
        }
            $this->id_indice = trim($valor);
        
    }

	
	
    public function get_id_articulo(){

        return $this->id_articulo;
    } 

    public function set_id_articulo($valor){

        $er=new ER();
        if(!$er->valida_campo_no_vacio($valor)){
            $this->errores[] = "Este articulo (".$valor.") no es valido";
            
        }

            $this->id_articulo = trim($valor);
        
    }

	
    public function get_numero(){

        return $this->numero;
    } 

    public function set_numero($valor){

        $er=new ER();
        if(!$er->valida_numericos($valor)||!$er->valida_campo_no_vacio($valor)){
            $this->errores[] = "Este numero (".$valor.") no es valido";
            
        }

            $this->numero = trim($valor);
        
    }
    
}

?>
