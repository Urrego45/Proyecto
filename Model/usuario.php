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
            die($e->getMessage);
        }
    }



}



?>