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
        $alm->telefono = $_POST['tel'];
        $alm->email = $_POST['email'];
        $alm->clave = $_POST['pass'];
        $alm->idRol = $_POST['rol'];
        $alm->estado = $_POST['estado'];

        $alm->idUsuario > 0 ? $this->usuario->editar($alm) : $this->usuario->registrar($alm);
        header("Location: index.php?v=listar");
    }

    public function enviarCorreo(){

        session_start();

        $alm = new usuario(); 
        $_SESSION['email'] = $alm->email = $_POST['email'];
        
        $this->usuario->enviarCorreo($alm);

        

        if($_SESSION['id'] == $_POST['idU']){
            header('Location: Model/correo.php');
        }
    }

    public function cambiarPass(){

        $alm = new usuario();
        $alm->id = $_POST['idU'];
        $alm->email = $_POST['email'];
        
        

        if($_POST['pass1'] == $_POST['pass2']){
            $alm->pass = $_POST['pass2'];
            $this->usuario->cambiarPass($alm);
            header('Location: index.php?v=index');
        }
    }

    
    

}


?>