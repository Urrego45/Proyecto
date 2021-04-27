<?php

include_once 'Model/proveedor.php'; 

class controllProveedor{

    public $proveedor;

    public function __construct(){
        $this->proveedor = new proveedor(); 
    }

    public function crear(){

        $alm = new proveedor();
        $alm->idProveedor = $_POST['idU'];
        $alm->nombreProveedor = $_POST['nombre'];
        $alm->direccion  = $_POST['direccion'];
        $alm->telefono = $_POST['telefono'];
        $alm->email = $_POST['email'];
        $alm->estado = $_POST['estado'];
        $alm->fechaRegistro = date('Y-m-d');

        $alm->idProveedor > 0 ? $this->proveedor->editar($alm) : $this->proveedor->registrar($alm);
        header("Location: index.php?v=listarP");
    }


}

?>