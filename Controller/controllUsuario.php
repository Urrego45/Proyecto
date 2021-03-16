<?php

include_once 'Model/usuario.php'; 

class controllUsuario{

    public $usuario;

    public $modelo;

    public function __construct(){
        $this->usuario = new usuario();
    }

    public function crear(){
        $alm = new usuario();
    }


}


?>