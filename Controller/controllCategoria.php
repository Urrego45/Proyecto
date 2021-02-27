<?php

include_once 'Modelo/categoria.php';

class controllCategoria{

    public $categoria;

    public function __construct(){
        $this->categoria = new categoria();
    }
}


?>