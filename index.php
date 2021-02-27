<?php

include_once 'Controller/controllCategoria.php';
include_once 'Controller/controllInsumo.php';
include_once 'Controller/controllInsumoprodf.php';
include_once 'Controller/controllProductofinal.php';
include_once 'Controller/controllProveedor.php';
include_once 'Controller/controllRol.php';
include_once 'Controller/controllUsuario.php';
include_once 'Controller/controllViews.php';

include_once 'Config/conexion.php';

$categoria = new controllCategoria();
$insumo = new controllInsumo();
$insumoprodf = new controllInsumoprodf();
$productof = new controllProductofinal();
$proveedor = new controllProveedor();
$rol = new controllRol();
$usuario = new controllUsuario();

$vistas = new controllVistas();

if(isset($_REQUEST['c'])){  // CATEGORIA

    $action = $_REQUEST['c'];
    call_user_func(array($categoria,$action));

}elseif(isset($_REQUEST['i'])){ // INSUMO

    $action = $_REQUEST['i'];
    call_user_func(array($insumo,$action));

}elseif(isset($_REQUEST['ip'])){ // INSUMO PRODUCTO FINAL

    $action = $_REQUEST['ip'];
    call_user_func(array($insumoprodf,$action));

}elseif(isset($_REQUEST['pf'])){ // PRODUCTO FINAL

    $action = $_REQUEST['pf'];
    call_user_func(array($productof,$action));

}elseif(isset($_REQUEST['p'])){ // PROVEEDOR

    $action = $_REQUEST['p'];
    call_user_func(array($proveedor,$action));

}elseif(isset($_REQUEST['r'])){ // ROL

    $action = $_REQUEST['r'];
    call_user_func(array($rol,$action));

}elseif(isset($_REQUEST['u'])){ // USUARIO
    
    $action = $_REQUEST['u'];
    call_user_func(array($usuario,$action));

}elseif(isset($_REQUEST['v'])){ // VISTAS
    
    $action = $_REQUEST['v'];
    call_user_func(array($usuario,$action));

}else{
    $vistas->index();
}



?>