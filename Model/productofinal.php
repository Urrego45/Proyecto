<?php

class productofinal{

    public $CNX;

    public $idProductoFinal;    
    public $idCategoria;
    public $nombre;
    public $precio;
    public $ventas;
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
            $query = "SELECT * FROM productofinal";
            $smt = $this->CNX->prepare($query);
            $smt->execute();
            return $smt->fetchAll(PDO::FETCH_OBJ);
        } catch (Exception $e) {
            die($e->getMessage());
        }
    }

    public function registrar(productofinal $data){
        try {
            $query = "INSERT INTO productofinal (nombre,precio,ventas,estado,FechaRegistro)
                    VALUES (?,?,?,2,?)";
            $this->CNX->prepare($query)->execute(array(
                $data->nombre,
                $data->precio,
                $data->ventas,
                $data->fechaRegistro));

            

            foreach($data->insumo as $td){
                $query = "INSERT INTO `insuprodf`(`idInsumo`, `idProductoFinal`, `cantidad`, `FechaRegistro`)
                VALUES (?,(SELECT MAX(idProductoFinal) FROM productofinal),?,?)";
                $this->CNX->prepare($query)->execute(array(
                    $data->insumo,
                    $data->cantidadI,
                    $data->fechaRegistro));
            }
            

        } catch (Exception $e) {
            die($e->getMessage());
        }
    }

    public function cargarID($id){
        try {
            $query = "SELECT * FROM productofinal where idProductoFinal=?";
            $smt = $this->CNX->prepare($query);
            $smt->execute(array($id));
            return $smt->fetch(PDO::FETCH_OBJ);
        } catch (Exception $e) {
            die($e->getMessage());
        }
    } 

    public function editar($data){
        try {
            $query = "UPDATE productofinal SET nombre=?,precio=?,ventas=?,estado=?
                    WHERE idProductoFinal=?";
            $this->CNX->prepare($query)->execute(array(
                $data->nombre,
                $data->precio,
                $data->ventas,
                $data->estado,
                $data->idProductoFinal));
        } catch (Exception $e) {
            die($e->getMessage());
        }
    }

    public function listarInsumos(){
        try {
            $query = "SELECT idInsumo,nombre FROM insumo";
            $smt = $this->CNX->prepare($query);
            $smt->execute();
            return $smt->fetchAll(PDO::FETCH_OBJ);
        } catch (Exception $e) {
            die($e->getMessage());
        }
    }

}

?>