<?php

class Status extends Modelo{

    public $nombre_tabla = 'status';
    public $pk = 'id_status';
    
    
    public $atributos = array(
        'status'=>array(),
    );
    
    public $errores = array( );
    
    private $status;
    
    function Status(){
        parent::Modelo();
    }
    
    public function get_atributos(){
        $rs = array();
        foreach ($this->atributos as $key => $value) {
            $rs[$key]=$this->$key;
        }
        return $rs;
    }
    
    
    public function get_status(){

        return $this->status;
    } 

    public function set_status($valor){

        $er=new ER();
        if(!$er->valida_campo_no_vacio($valor)){
            $this->errores[] = "Este dato (".$valor.") esta vacío";
            
        }

            $this->status = trim($valor);
        
    }
    
}

?>
