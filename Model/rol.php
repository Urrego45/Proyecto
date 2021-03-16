<?php

class rol{

    public $CNX;

    public $idRol;
    public $rol;
    
    public function __construct(){
        try {
            $this->CNX = conexion::conectar();
        } catch (Exception $e) {
            die($e->getMessage());
        }
    }

}


?>