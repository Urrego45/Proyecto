<?php

include_once 'Model/usuario.php'; 

class controllUsuario{

    public $usuario;

    public $modelo;

    public function __construct(){
        $this->usuario = new usuario();
    }

    public function crear(){
        $alm = new usuario();

        $alm->nombres = $_POST['nombre'];
        $alm->apellidos = $_POST['apellido'];
        $alm->telefono = $_POST['telefono'];
        $alm->email = $_POST['email'];
        $alm->clave = $_POST['pass'];
        $alm->idRol = $_POST['rol'];

        $this->usuario->registrar($alm);
        header("Location: index.php?v=listar");
    }

    
    

}


?>