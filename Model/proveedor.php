<?php

class proveedor{

    public $CNX;

    public $idProveedor;    
    public $nombreProveedor;
    public $direccion;
    public $telefono;
    public $email;
    public $estado;

    public function __construct(){
        try {
            $this->CNX = conexion::conectar();
        } catch (Exception $e) {
            die($e->getMessage());
        }
    }

}


?>