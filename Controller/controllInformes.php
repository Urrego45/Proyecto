<?php

class controllInformes{

        public $insumos;
        public $producto;
        public $proveedor;
        public $tiempo;
    

    public function __construct(){}

    public function informe(){
        session_start();

        $_SESSION['tiempo']  =  $_POST['tiempo'];

        if(isset($_POST['insumo'])){

            header('Location: Views/informes/informeInsumo.php');
            
        }elseif(isset($_POST['producto'])){

            header('Location: Views/informes/informeProductoF.php');

        }elseif(isset($_POST['proveedor'])){

            header('Location: Views/informes/informeProveedor.php');

        }else{

            header('Location: Views/informes/informInProdF.php');

        }
    }

}



?>