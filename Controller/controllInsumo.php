<?php

include_once 'Model/insumo.php'; 

class controllInsumo{

    public $insumo;

    public function __construct(){
        $this->insumo = new insumo();
    }

    public function crear(){
        $alm = new insumo();
        $alm->idInsumo = $_POST['idU'];
        $alm->idProveedor = $_POST['provee'];
        
        $alm->nombre = $_POST['nombre'];
        $alm->precio = $_POST['precio'];
        $alm->vencimiento = $_POST['fechaV'];
        $alm->stockInicial = $_POST['stockI'];
        $alm->stock = $_POST['stockA'];
        $alm->entradas = $_POST['insumE'];
        $alm->perdidas = $_POST['perdidas'];
        $alm->estado = $_POST['estado'];

        $alm->idInsumo > 0 ? $this->insumo->editar($alm) : $this->insumo->registrar($alm);

        if(isset($_POST['ad'])){
            header("Location: index.php?v=listarI");
        }else{
            header("Location: index.php?v=listarIS");
        }
        
    }

}


?>