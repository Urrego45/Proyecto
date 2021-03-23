<?php


class login{

    public $CNX;


    public function __construct(){
        try{
            $this->CNX = conexion::conectar(); 
        }catch(Exception $e){
            die($e->getMessage());
        }
    }

    public function validar(){
        if(isset($_POST['validar'])){
            if(empty($_POST['email']) || empty($_POST['pass'])){
                echo 'ingrese';
            }else{
                $email = $_REQUEST['email'];
                $pass = $_REQUEST['pass'];

                $query = "SELECT idUsuario, idRol FROM usuario
                        WHERE email = :email AND clave = :clave";
                
                $smt = $this->CNX->prepare($query);
                $smt->bindValue(":email",$email);
                $smt->bindValue(":clave",$pass);

                $smt->execute();

                $res = $smt->fetch(PDO::FETCH_ASSOC);

                if(empty($res)){
                    header('location: index.php?v=login');
                }else{
                    $_SESSION['idUsuario'] = $res['idUsuario'];
                    $_SESSION['idRol'] = $res['idRol'];

                    if($_SESSION['idRol'] == 1){
                        session_start();
                        header('location: index.php?v=inicioA');
                        echo 'admin';
                    }elseif($_SESSION['idRol'] == 2){
                        session_start();
                        header('location: index.php?v=inicioS');
                        echo 'sub';
                    }elseif($_SESSION['idRol'] == 3){
                        session_start();
                        header('location: index.php?v=inicioE');
                        echo 'empleado';
                    }
                }
            }
        }else{

        }
    }

    public function cerrarSesion(){
        session_start();
        session_destroy();
        header('location: index.php?v=index');
    }

}

?>