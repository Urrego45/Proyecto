<?php

class usuario{

    public $CNX;

    public $idUsuario;
    public $idRol; 
    public $nombres; 
    public $apellidos; 
    public $telefono; 
    public $email; 
    public $clave; 
    public $estado;

    public function __construct(){
        try{
            $this->CNX = conexion::conectar();
        }catch(Exception $e){
            die($e->getMessage());
        }
    }

    public function listar(){ 
        try {
            $query = "SELECT * FROM usuario";
            $smt = $this->CNX->prepare($query);
            $smt->execute();
            return $smt->fetchAll(PDO::FETCH_OBJ);
        } catch (Exception $e) {
            die($e->getMessage());
        }
    }

    public function listarRol(){
        try {
            $query = "SELECT * FROM rol";
            $smt = $this->CNX->prepare($query);
            $smt->execute();
            return $smt->fetchAll(PDO::FETCH_OBJ);
        } catch (Exception $e) {
            die($e->getMessage());
        }
    }

    public function registrar(usuario $data){
        try {
            $query = "INSERT INTO usuario (idRol,nombres,apellidos,telefono,email,clave,estado)
                    VALUES (?,?,?,?,?,?,2)";
            $this->CNX->prepare($query)->execute(array(
                $data->idRol,
                $data->nombres,
                $data->apellidos,
                $data->telefono,
                $data->email,
                $data->clave));
        } catch (Exception $e) {
            die($e->getMessage());
        }
    }

    public function cargarID($id){
        try {
            $query = "SELECT * FROM usuario where idUsuario=?";
            $smt = $this->CNX->prepare($query);
            $smt->execute(array($id));
            return $smt->fetch(PDO::FETCH_OBJ);
        } catch (Exception $e) {
            die($e->getMessage());
        }
    }

    public function editar($data){
        try {
            $query = "UPDATE usuario SET idRol=?,nombres=?,apellidos=?,telefono=?,email=?,estado=?
                        WHERE idUsuario=?";
            $this->CNX->prepare($query)->execute(array(
                $data->idRol,
                $data->nombres,
                $data->apellidos,
                $data->telefono,
                $data->email,
                $data->estado,
                $data->idUsuario));
        } catch (Exception $e) {
            die($e->getMessage());
        }
    }

    public function enviarCorreo($data){ 
        try {
            $query = "SELECT idUsuario FROM `usuario` WHERE email = ?";
            $res = $this->CNX->prepare($query)->execute(array(
                $data->email));

            $_SESSION['id'] = $res;

        } catch (Exception $e) {
            die($e->getMessage());
        }
    }

    public function cambiarPass($data){ 
        try {
            $query = "UPDATE usuario SET clave=?
            WHERE idUsuario=?";
            $res = $this->CNX->prepare($query)->execute(array(
                $data->pass,
                $data->id));
        } catch (Exception $e) {
            die($e->getMessage());
        }
    }

    public function existe($email){
        try {
            $query = "SELECT * FROM usuario where email=?";
            $smt = $this->CNX->prepare($query);
            $smt->execute(array($email));
            return $smt->fetch(PDO::FETCH_OBJ);
        } catch (Exception $e) {
            die($e->getMessage());
        }
    }

}



?>