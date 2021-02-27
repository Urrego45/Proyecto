<?php

include_once 'Modelo/categoria.php';

class controlCategoria{

    public $categoria;

    public function __construct(){
        $this->categoria = new categoria();
    }
}


?>