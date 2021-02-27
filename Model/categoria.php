<?php

class categoria{

    public $CNX;

    public $idCategoria;
    public $categoria;

    public function __construct(){
        try {
            $this->CNX = conexion::conectar();
        } catch (Exception $e) {
            die($e->getMessage());
        }
    }
}


?>