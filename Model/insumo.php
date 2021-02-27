<?php



class insumo{

    public $CNX;
    public $idInsumo;    
    public $idCategoria;
    public $idProveedor;
    public $nombre;
    public $precio;
    public $vencimiento;
    public $stockInicial;
    public $stock;
    public $entradas;
    public $perdidas;
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