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
        $alm->idUsuario = $_POST['idU'];
        $alm->nombres = $_POST['nombre'];
        $alm->apellidos = $_POST['apellido'];
        $alm->telefono = $_POST['telefono'];
        $alm->email = $_POST['email'];
        $alm->clave = $_POST['pass'];
        $alm->idRol = $_POST['rol'];
        $alm->estado = $_POST['estado'];

        $alm->idUsuario > 0 ? $this->usuario->editar($alm) : $this->usuario->registrar($alm);
        header("Location: index.php?v=listar");
    }

    public function cambiarPass(){
        $alm = new usuario();
        $alm->idUsuario = $_POST['idU'];
        
        if($_POST['pass1'] == $_POST['pass2']){
            $alm->clave = $_POST['pass2'];

            $this->usuario->cambioPass($alm);
            header("Location: index.php?v=inicioA");

        }else{
            echo 'error';
        }

    }

    
    

}


?>