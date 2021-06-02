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

        if(isset($_POST['tiempo']) > 0){

            if(isset($_POST['insumo'])){

                header('Location: Views/informes/informeInsumo.php');
                
            }elseif(isset($_POST['producto'])){
    
                header('Location: Views/informes/informeProductoF.php');
    
            }elseif(isset($_POST['proveedor'])){
    
                header('Location: Views/informes/informeProveedor.php');
    
            }elseif(isset($_POST['iproductofinal'])){
    
                header('Location: Views/informes/informInProdF.php');
    
            }else{

                echo "<script>alert('Error');</script>";

            }
        }else{

            echo "<script>alert('Error: Porfavor ingrese lapso de tiempo valido.');</script>";

            if($_POST['usuario'] == 'ad'){

                header('location: index.php?v=inicioA');
                
            }else{
                
                
                header('location: index.php?v=inicioS');

            }

        }

        
    }

}



?>