<?php

include_once 'Model/categoria.php';

class controllCategoria{

    public $categoria;

    public function __construct(){
        $this->categoria = new categoria();
    }
}


?>