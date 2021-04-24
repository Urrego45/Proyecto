<?php
require('../../assets/librerias/fpdf/fpdf.php');
require('../../Config/conexion.php');
include_once '../../Controller/controllInformes.php';
session_start();


class PDF extends FPDF
{
    

    // Cabecera de página
    function Header(){
        // Arial bold 15
        $this->SetFont('Arial','B',11);
        // Movernos a la derecha
        $this->Cell(60);
        // Título
        if($_SESSION['tiempo'] == 1){
            $this->Cell(70,10,'Reporte de insumo producto final dia',0,0,'C');
        }elseif($_SESSION['tiempo'] == 2){
            $this->Cell(70,10,'Reporte de insumo producto final semana',0,0,'C');
        }else{
            $this->Cell(70,10,'Reporte de insumo producto final mes',0,0,'C');
        }
        // Salto de línea
        $this->Ln(20);

        $this->Cell(9, 10, 'Id', 1, 0, 'C', 0);
        $this->Cell(20, 10, 'Insumo', 1, 0, 'C', 0);
        $this->Cell(35, 10, 'Producto Final', 1, 0, 'C', 0);
        $this->Cell(25, 10, 'Precio', 1, 0, 'C', 0);
        $this->Cell(25, 10, 'Cantidad', 1, 1, 'C', 0);

    }

    // Pie de página
    function Footer(){
        // Posición: a 1,5 cm del final
        $this->SetY(-15);
        // Arial italic 8
        $this->SetFont('Arial','I',8);
        // Número de página
        $this->Cell(0,10,utf8_decode('Página ').$this->PageNo().'/{nb}',0,0,'C');
    }
} 


$CNX = conexion::conectar();



if($_SESSION['tiempo'] == 1){

    $query = "SELECT * FROM insuprodf";
    $smt = $CNX->prepare($query);
    $smt->execute();
    
    
    $pdf = new PDF();
    $pdf->AliasNbPages();
    $pdf->AddPage();
    $pdf->SetFont('Arial','',9);
    
    while($row = $smt->fetch(PDO::FETCH_ASSOC)){
        $pdf->Cell(9, 10, $row['idInsuProdF'], 1, 0, 'C', 0);
        $pdf->Cell(20, 10, $row['idInsumo'], 1, 0, 'C', 0);
        $pdf->Cell(35, 10, $row['idProductoFinal'], 1, 0, 'C', 0);
        $pdf->Cell(25, 10, $row['precio'], 1, 0, 'C', 0);
        $pdf->Cell(25, 10, $row['cantidad'], 1, 1, 'C', 0);
    }
    
    $pdf->Output(); 

}elseif ($_SESSION['tiempo'] == 2) {
    $query = "SELECT * FROM usuario";
    $smt = $CNX->prepare($query);
    $smt->execute();
    
    
    $pdf = new PDF();
    $pdf->AliasNbPages();
    $pdf->AddPage();
    $pdf->SetFont('Arial','',9);
    
    while($row = $smt->fetch(PDO::FETCH_ASSOC)){
        $pdf->Cell(9, 10, $row['idInsuProdF'], 1, 0, 'C', 0);
        $pdf->Cell(20, 10, $row['idInsumo'], 1, 0, 'C', 0);
        $pdf->Cell(35, 10, $row['idProductoFinal'], 1, 0, 'C', 0);
        $pdf->Cell(25, 10, $row['precio'], 1, 0, 'C', 0);
        $pdf->Cell(25, 10, $row['cantidad'], 1, 1, 'C', 0);
    }
    
    $pdf->Output(); 
}else{
    $query = "SELECT * FROM usuario";
    $smt = $CNX->prepare($query);
    $smt->execute();
    
    
    $pdf = new PDF();
    $pdf->AliasNbPages();
    $pdf->AddPage();
    $pdf->SetFont('Arial','',9);
    
    while($row = $smt->fetch(PDO::FETCH_ASSOC)){
        $pdf->Cell(9, 10, $row['idInsuProdF'], 1, 0, 'C', 0);
        $pdf->Cell(20, 10, $row['idInsumo'], 1, 0, 'C', 0);
        $pdf->Cell(35, 10, $row['idProductoFinal'], 1, 0, 'C', 0);
        $pdf->Cell(25, 10, $row['precio'], 1, 0, 'C', 0);
        $pdf->Cell(25, 10, $row['cantidad'], 1, 1, 'C', 0);
    }

    $pdf->Output(); 
}

