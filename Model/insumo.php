<?php



class insumo{

    public $CNX;
    public $idInsumo;    
    public $idCategoria;
    public $idProveedor;
    public $nombre;
    public $precio;
    public $vencimiento;
    public $stockInicial;
    public $stock;
    public $entradas;
    public $perdidas;
    public $estado;

    public function __construct(){
        try {
            $this->CNX = conexion::conectar();
        } catch (Exception $e) {
            die($e->getMessage());
        }
    }

    public function listar(){
        try {
            $query = "SELECT * FROM insumo";
            $smt = $this->CNX->prepare($query);
            $smt->execute();
            return $smt->fetchAll(PDO::FETCH_OBJ);
        } catch (Exception $e) {
            die($e->getMessage());
        }
    }

    public function listarProveedor(){
        try {
            $query = 'SELECT * FROM proveedor WHERE estado = "activo"';
            $smt = $this->CNX->prepare($query);
            $smt->execute();
            return $smt->fetchAll(PDO::FETCH_OBJ);
        } catch (Exception $e) {
            die($e->getMessage());
        }
    }

    public function registrar(insumo $data){
        try {
            $query = "INSERT INTO insumo (idProveedor,nombre,precio,vencimiento,stockInicial,stock,entradas,perdidas,estado,FechaRegistro)
                    VALUES (?,?,?,?,?,?,?,?,2,?)";
            $this->CNX->prepare($query)->execute(array(
                $data->idProveedor,
                $data->nombre,
                $data->precio,
                $data->vencimiento,
                $data->stockInicial,
                $data->stock,
                $data->entradas,
                $data->perdidas,
                $data->fechaRegistro));
        } catch (Exception $e) {
            die($e->getMessage());
        }
    }

    public function cargarID($id){
        try {
            $query = "SELECT * FROM insumo where idInsumo=?";
            $smt = $this->CNX->prepare($query);
            $smt->execute(array($id));
            return $smt->fetch(PDO::FETCH_OBJ);
        } catch (Exception $e) {
            die($e->getMessage());
        }
    }

    public function editar($data){
        try {
            $query = "UPDATE insumo SET idProveedor=?,nombre=?,precio=?,vencimiento=?,stockInicial=?,stock=?,entradas=?,perdidas=?,estado=?
                    WHERE idInsumo=?";
            $this->CNX->prepare($query)->execute(array(
                $data->idProveedor,
                $data->nombre,
                $data->precio,
                $data->vencimiento,
                $data->stockInicial,
                $data->stock,
                $data->entradas,
                $data->perdidas,
                $data->estado,
                $data->idInsumo));
        } catch (Exception $e) {
            die($e->getMessage());
        }
    }

    public function aumentarInsumo($data){
        try {
            $query = "UPDATE `insumo` SET `stock`= stock + ?,`entradas`= entradas + ? WHERE idInsumo = ?";
            $this->CNX->prepare($query)->execute(array(
                $data->stock,
                $data->cantidad,
                $data->idInsumo));
        } catch (Exception $e) {
            die($e->getMessage());
        }
    }



}


?>