<?php

class insumoproductof{

    public $CNX;
    public $idInsuProdF;
    public $idInsumo;    
    public $idProductoFinal;
    public $precio;    
    public $cantidad;

    public function __construct(){
        try {
            $this->CNX = conexion::conectar();
        } catch (Exception $e) {
            die($e->getMessage());
        }
    }

}

?>