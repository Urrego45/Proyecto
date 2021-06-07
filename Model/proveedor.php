<?php

class proveedor{

    public $CNX;

    public $idProveedor;    
    public $nombreProveedor;
    public $direccion;
    public $telefono;
    public $email;
    public $estado;
    public $fechaRegistro;

    public function __construct(){
        try {
            $this->CNX = conexion::conectar();
        } catch (Exception $e) {
            die($e->getMessage());
        }
    }

    public function listar(){
        try {
            $query = "SELECT * FROM proveedor";
            $smt = $this->CNX->prepare($query);
            $smt->execute();
            return $smt->fetchAll(PDO::FETCH_OBJ);
        } catch (Exception $e) {
            die($e->getMessage());
        }
    }

    public function registrar(proveedor $data){
        try {
            $query = 'INSERT INTO proveedor (nombreProveedor,direccion,telefono,email,estado,FechaRegistro)
                    VALUES (?,?,?,?,"inactivo",?)';
            $this->CNX->prepare($query)->execute(array(
                $data->nombreProveedor,
                $data->direccion,
                $data->telefono,
                $data->email,
                $data->fechaRegistro));
        } catch (Exception $e) {
            die($e->getMessage());
        }
    }

    public function cargarID($id){
        try {
            $query = "SELECT * FROM proveedor where idProveedor=?";
            $smt = $this->CNX->prepare($query);
            $smt->execute(array($id));
            return $smt->fetch(PDO::FETCH_OBJ);
        } catch (Exception $e) {
            die($e->getMessage());
        }
    }

    public function editar($data){
        try {
            $query = "UPDATE proveedor SET nombreProveedor=?,direccion=?,telefono=?,email=?,estado=?
                    WHERE idProveedor=?";
            $this->CNX->prepare($query)->execute(array(
                $data->nombreProveedor,
                $data->direccion,
                $data->telefono,
                $data->email,
                $data->estado,
                $data->idProveedor));
        } catch (Exception $e) {
            die($e->getMessage());
        }
    }

    public function existe($email){
        try {
            $query = "SELECT * FROM proveedor where email=?";
            $smt = $this->CNX->prepare($query);
            $smt->execute(array($email));
            return $smt->fetch(PDO::FETCH_OBJ);
        } catch (Exception $e) {
            die($e->getMessage());
        }
    }

}


?>