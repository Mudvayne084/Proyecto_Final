<?php

class Articulo extends Modelo{

    public $nombre_tabla = 'articulo';
    public $pk = 'id_articulo';
    
    
    public $atributos = array(
        
        'nombre'=>array(),
        'resumen'=>array(),
        'abstract'=>array(),
        'introduccion'=>array(),
        'metodologia'=>array(),
        'contenido'=>array(),
        'fecha_creacion'=>array(),
        'archivo_pdf'=>array(),
        'id_status'=>array(),
        'conclusiones'=>array(),
        'agradecimientos'=>array(),
        'referencias'=>array()
        
    );
    
    public $errores = array( );
    
    private $nombre;
    private $resumen;
    private $abstract;
    private $introduccion;
    private $metodologia;
    private $contenido;
    private $fecha_creacion;
    private $archivo_pdf;
    private $id_status;
    private $conclusiones;
    private $agradecimientos;
    private $referencias;
    
    
    function Articulo(){
        parent::Modelo();
    }
    
    public function get_atributos(){
        $rs = array();
        foreach ($this->atributos as $key => $value) {
            $rs[$key]=$this->$key;
        }
        return $rs;
    }
    
    
    public function get_nombre(){

        return $this->nombre;
    } 

    public function set_nombre($valor){

        $er=new ER();
        if(!$er->valida_nombre($valor)||!$er->valida_campo_no_vacio($valor)){
            $this->errores[] = "Este nombre (".$valor.") no es valido";
            
        }

            $this->nombre = trim($valor);
        
    }

    public function get_resumen(){

        return $this->resumen;
    } 

    public function set_resumen($valor){

        $er=new ER();
        if(!$er->valida_campo_no_vacio($valor)){
            $this->errores[] = "Este resumen (".$valor.") no es valido";
            
        }

            $this->resumen = trim($valor);
        
    }

    public function get_abstract(){

        return $this->abstract;
    } 

    public function set_abstract($valor){

        $er=new ER();
        if(!$er->valida_campo_no_vacio($valor)){
            $this->errores[] = "Este abstract (".$valor.") no es valido";
            
        }

            $this->abstract = trim($valor);
        
    }

    public function get_introduccion(){

        return $this->introduccion;
    } 

    public function set_introduccion($valor){

        $er=new ER();
        if(!$er->valida_campo_no_vacio($valor)){
            $this->errores[] = "Esta introducción (".$valor.") no es valido";
            
        }

            $this->introduccion = trim($valor);
    }

    public function get_metodologia(){

        return $this->metodologia;
    } 

    public function set_metodologia($valor){

        $er=new ER();
        if(!$er->valida_campo_no_vacio($valor)){
            $this->errores[] = "Esta metodología (".$valor.") no es valido";
            
        }

            $this->metodologia = trim($valor);
        
    }

    public function get_contenido(){

        return $this->contenido;
    } 

    public function set_contenido($valor){

        $er=new ER();
        if(!$er->valida_campo_no_vacio($valor)){
            $this->errores[] = "Este contenido (".$valor.") no es valido";
            
        }

            $this->contenido = trim($valor);
        
    }

    public function get_fecha_creacion(){

        return $this->fecha_creacion;
    } 

    public function set_fecha_creacion($valor){

        $er=new ER();
        if(!$er->valida_fecha($valor)&&!$er->valida_campo_no_vacio($valor)){
            $this->errores[] = "Esta fecha (".$valor.") no es valido";
            
        }
            $this->fecha = trim($valor);
    }
        
    

    public function get_archivo_pdf(){

        return $this->archivo_pdf;
    } 

    public function set_archivo_pdf($valor){

        $er=new ER();
        if($er->valida_PDF($valor['type'])||!$er->valida_tamanio($valor['size'])){
            $this->errores[] = 'Este archivo ('.$valor['name'].') no es valido';
            
        }

            $this->archivo_pdf = $valor['name'];
        
    }

    public function get_id_status(){

        return $this->id_status;
    } 

    public function set_id_status($valor){

        $er=new ER();
        if(!$er->valida_numericos($valor)){
            $this->errores[] = "Este id_status (".$valor.") no es valido";
            
        }

            $this->id_status = trim($valor);
        
    }

    public function get_conclusiones(){

        return $this->conclusiones;
    } 

    public function set_conclusiones($valor){

        $er=new ER();
        if(!$er->valida_campo_no_vacio($valor)){
            $this->errores[] = "Estas conclusiones (".$valor.") no son validas";
            
        }

            $this->conclusiones = trim($valor);
        
    }

    public function get_agradecimientos(){

        return $this->agradecimientos;
    } 

    public function set_agradecimientos($valor){

        $er=new ER();
        if(!$er->valida_campo_no_vacio($valor)){
            $this->errores[] = "Estos agradecimientos (".$valor.") no son validos";
            
        }

            $this->agradecimientos = trim($valor);
        
    }

    public function get_referencias(){

        return $this->referencias;
    } 

    public function set_referencias($valor){

        $er=new ER();
        if(!$er->valida_campo_no_vacio($valor)){
            $this->errores[] = "Estas referencias (".$valor.") no son validas";
            
        }

            $this->referencias = trim($valor);
        
    }
    
}

?>
