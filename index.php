<?php

include_once 'Controller/controllInsumo.php';
include_once 'Controller/controllInsumoprodf.php';
include_once 'Controller/controllProductofinal.php';
include_once 'Controller/controllProveedor.php';
include_once 'Controller/controllRol.php';
include_once 'Controller/controllUsuario.php';
include_once 'Controller/controllViews.php';
include_once 'Controller/login.php';
include_once 'Controller/controllInformes.php';

include_once 'Config/conexion.php';

$insumo = new controllInsumo();
$insumoprodf = new controllInsumoprodf();
$productof = new controllProductofinal();
$proveedor = new controllProveedor();
$rol = new controllRol();
$usuario = new controllUsuario();

$vistas = new controllVistas();
$login = new login();

$informe = new controllInformes();

if(isset($_REQUEST['i'])){ // INSUMO

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
    call_user_func(array($vistas,$action));

}elseif(isset($_REQUEST['l'])){ // LOGIN
    
    $action = $_REQUEST['l'];
    call_user_func(array($login,$action));
}elseif(isset($_REQUEST['in'])){ // Informes
    
    $action = $_REQUEST['in'];
    call_user_func(array($informe,$action));
}else{
    $vistas->index();
}



?>