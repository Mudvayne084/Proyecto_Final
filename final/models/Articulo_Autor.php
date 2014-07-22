<?php

class Articulo_Autor extends Modelo {

    public $nombre_tabla = 'articulo_autor';
    public $pk = 'id_articulo_autor';
    

    public $atributos = array(
        'id_articulo' => array(),
        'id_autor' => array()
    );


    public $errores = array();
    private $id_articulo;
    private $id_autor;

    function Articulo_Autor() {
        parent::Modelo();
    }

    public function get_atributos() {
        $rs = array();
        foreach ($this->atributos as $key => $value) {
            $rs[$key] = $this->$key;
        }
        return $rs;
    }

    public function get_id_articulo() {
        return $this->id_articulo;
    }

    public function get_id_autor() {
        return $this->id_autor;
    }

    public function set_id_articulo($valor) {

        $er = new Er();

        if (!$er->valida_campo_no_vacio($valor)) {
            $this->errores[] = "El campo (" . $valor . ") no debe ser vacío";
        }

        $this->id_articulo = trim($valor);
    }

    public function set_id_autor($valor) {

        $er = new Er();

        if (!$er->valida_campo_no_vacio($valor)) {
            $this->errores[] = "El campo (" . $valor . ") no debe ser vacío";
        }

        $this->id_autor = trim($valor);
    }

    

}

?>