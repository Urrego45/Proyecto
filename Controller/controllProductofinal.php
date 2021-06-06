<?php

include 'Model/productofinal.php'; 

class controllProductofinal{

    public $productof;

    public function __construct(){
        $this->productof = new productofinal();
    }

    public function crear(){ 
        $alm = new productofinal();
        $alm->idProductoFinal = $_POST['idU'];
        
        $alm->nombre = $_POST['nombre'];
        $alm->precio = $_POST['precio'];
        $alm->ventas = $_POST['ventas'];
        $alm->estado = $_POST['estado'];
        $alm->fechaRegistro = date('Y-m-d');
        
        
        $alm->insumo = $_POST['insumo'];
        $alm->cantidadI = []; 

        

        for($i = 0; $i < count($_POST['cantidadI']); $i++){
            if($_POST['cantidadI'][$i] != null || $_POST['cantidadI'][$i] != ""){
                $alm->cantidadI[] = $_POST['cantidadI'][$i];  
            }
        }

        $alm->idProductoFinal > 0 ? $this->productof->editar($alm) : $this->productof->registrar($alm);



        if(isset($_POST['ad'])){
            header("Location: index.php?v=listarPr");
        }else{
            header("Location: index.php?v=listarPrS");
        }
    }

}

?>