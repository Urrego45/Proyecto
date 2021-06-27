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
                
                header('location: index.php?v=login');
            }else{
                session_start();
                $email = $_REQUEST['email'];
                $pass = $_REQUEST['pass'];

                $query = 'SELECT idUsuario, idRol, nombres, clave, estado FROM usuario
                        WHERE email = :email AND clave = :clave AND estado = "activo"';
                
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
                    $_SESSION['nombre'] = $res['nombres'];
                    $_SESSION['clave'] = $res['clave'];
                    $_SESSION['estado'] = $res['estado'];

                    if($_SESSION['idRol'] == 1){        
            
                        header('location: index.php?v=inicioA');
            
                    }elseif($_SESSION['idRol'] == 2){
                            
                        header('location: index.php?v=inicioS');
            
                    }else{
                        header('location: index.php?v=login');

                    }
                }
            }
        }else{
            header('location: index.php?v=login');
        }
    }


    public function cerrarSesion(){
        session_start();
        
        session_destroy();
        header('location: index.php?v=index');
    }

}

?>