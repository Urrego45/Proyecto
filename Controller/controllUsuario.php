<?php

include_once 'Model/usuario.php'; 

class controllUsuario{

    public $usuario;

    public $modelo;

    public function __construct(){
        $this->usuario = new usuario();
    }

    public function crear(){
        $clave = $_POST['pass'];
        
        $alm = new usuario();
        $alm->idUsuario = $_POST['idU'];
        $alm->nombres = $_POST['nombre'];
        $alm->apellidos = $_POST['apellido'];
        $alm->telefono = $_POST['tel'];
        $alm->email = $_POST['email'];
        /* $alm->clave = $_POST['pass']; */
        $alm->pass_cifrado = password_hash($clave, PASSWORD_DEFAULT);
        $alm->idRol = $_POST['rol'];
        $alm->estado = $_POST['estado'];

        if($alm->idUsuario > 0){
            $this->usuario->editar($alm);
            header("Location: index.php?v=listar");
        }else{

            if($this->usuario->existe($alm->email)){

                echo '<h1>Hola</h1>';
                header("Location: index.php?v=crear");
    
            }else{
                $this->usuario->registrar($alm);
                header("Location: index.php?v=listar");
            }
        }
        
    }

    public function enviarCorreo(){

        session_start();

        $alm = new usuario(); 
        $alm->email = $_POST['email'];
        
        $this->usuario->enviarCorreo($alm);

        $_SESSION['emailC'] = $_POST['email'];

        if($_SESSION['id'] == $_POST['idU']){
            header('Location: Model/correo.php');
        }
    }

    public function cambiarPass(){
        session_start();
        $alm = new usuario();
        $alm->id = $_SESSION['idUsuario'];
        
        

        if($_POST['pass1'] == $_POST['pass2']){
            $alm->pass = $_POST['pass2'];
            $this->usuario->cambiarPass($alm);
            header('Location: index.php?v=index');
        }
    }

    
    

}


?>