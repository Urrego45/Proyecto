<?php

class productofinal{

    public $CNX;

    public $idProductoFinal;    
    public $idCategoria;
    public $nombre;
    public $precio;
    public $ventas;
    public $estado;
    
    public function __construct(){
        try{
            $this->CNX = conexion::conectar();
        }catch(Exception $e){
            die($e->getMessage());
        }
    }


}

?>