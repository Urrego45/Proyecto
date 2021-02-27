<?php

include_once 'Model/proveedor.php'; 

class controllProveedor{

    public $proveedor;

    public function __construct(){
        $this->proveedor = new proveedor();
    }

}

?>