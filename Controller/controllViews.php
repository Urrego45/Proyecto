<?php

include_once 'Model/categoria.php';
include_once 'Model/insumo.php';
include_once 'Model/insumoprodf.php';
include_once 'Model/productofinal.php';
include_once 'Model/proveedor.php';
include_once 'Model/rol.php';
include_once 'Model/usuario.php';



class controllVistas{

    public $categoria;
    public $insumo;
    public $insumoprodf;
    public $productof;
    public $proveedor;
    public $rol;
    public $usuario;

    public function __construct(){

        $this->categoria = new categoria();
        $this->insumo = new insumo();            
        $this->insumoprodf = new insumoproductof();
        $this->productof = new productofinal();
        $this->proveedor = new proveedor();
        $this->rol = new rol();
        $this->usuario = new usuario();

    }

    public function index(){
        include_once 'Views/login.php';
    }


}




?>