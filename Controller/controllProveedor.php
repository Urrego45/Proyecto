<?php

include_once 'Model/proveedor.php';

class controllProveedor{

    public $prooveedor;

    public function __construct(){
        $this->proveedor = new proveedor();
    }

}

?>