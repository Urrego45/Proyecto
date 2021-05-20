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
        $this->SetTextColor(17,40,82);
        // Movernos a la derecha
        $this->Cell(50);
        // Título
        if($_SESSION['tiempo'] == 1){
            $this->Cell(85,10,'Reporte de insumo producto final dia',1,0,'C');
        }elseif($_SESSION['tiempo'] == 2){
            $this->Cell(85,10,'Reporte de insumo producto final semana',1,0,'C');
        }else{
            $this->Cell(85,10,'Reporte de insumo producto final mes',1,0,'C');
        }
        // Salto de línea
        $this->Ln(20);

        $this->Cell(9, 10, 'Id', 1, 0, 'C', 0);
        $this->Cell(20, 10, 'Insumo', 1, 0, 'C', 0);
        $this->Cell(35, 10, 'Producto Final', 1, 0, 'C', 0);
        $this->Cell(25, 10, 'Precio', 1, 0, 'C', 0);
        $this->Cell(25, 10, 'Cantidad', 1, 0, 'C', 0);
        $this->Cell(25, 10, 'Fecha', 1, 1, 'C', 0);

    }

    // Pie de página
    function Footer(){
        // Posición: a 1,5 cm del finalsan
        $this->SetY(-15);
        // Arial italic 8
        $this->SetFont('Arial','I',8);
        // Número de página
        $this->Cell(0,10,utf8_decode('Página ').$this->PageNo().'/{nb}',0,0,'C');
    }
} 


$CNX = conexion::conectar();



if($_SESSION['tiempo'] == 1){

    $query = "SELECT * FROM `insuprodf` WHERE FechaRegistro >= DATE_SUB(CURDATE(), INTERVAL 24 HOUR)";
    $smt = $CNX->prepare($query);
    $smt->execute();
    
    
    $pdf = new PDF();
    $pdf->AliasNbPages();
    $pdf->AddPage();
    $pdf->SetFont('Arial','',9);
    $pdf->SetFillColor(225,225,225);
    
    while($row = $smt->fetch(PDO::FETCH_ASSOC)){
        $pdf->Cell(9, 10, $row['idInsuProdF'], 1, 0, 'C', 1);
        $pdf->Cell(20, 10, $row['idInsumo'], 1, 0, 'C', 1);
        $pdf->Cell(35, 10, $row['idProductoFinal'], 1, 0, 'C', 1);
        $pdf->Cell(25, 10, $row['precio'], 1, 0, 'C', 1);
        $pdf->Cell(25, 10, $row['cantidad'], 1, 0, 'C', 1);
        $pdf->Cell(25, 10, $row['FechaRegistro'], 1, 1, 'C', 1);
    }
    
    $pdf->Output(); 

}elseif ($_SESSION['tiempo'] == 2) {
    $query = "SELECT * FROM `insuprodf` WHERE FechaRegistro >= DATE_SUB(CURDATE(), INTERVAL 7 DAY )";
    $smt = $CNX->prepare($query);
    $smt->execute();
    
    
    $pdf = new PDF();
    $pdf->AliasNbPages();
    $pdf->AddPage();
    $pdf->SetFont('Arial','',9);
    $pdf->SetFillColor(225,225,225);
    
    while($row = $smt->fetch(PDO::FETCH_ASSOC)){
        $pdf->Cell(9, 10, $row['idInsuProdF'], 1, 0, 'C', 1);
        $pdf->Cell(20, 10, $row['idInsumo'], 1, 0, 'C', 1);
        $pdf->Cell(35, 10, $row['idProductoFinal'], 1, 0, 'C', 1);
        $pdf->Cell(25, 10, $row['precio'], 1, 0, 'C', 1);
        $pdf->Cell(25, 10, $row['cantidad'], 1, 0, 'C', 1);
        $pdf->Cell(25, 10, $row['FechaRegistro'], 1, 1, 'C', 1);
    }
    
    $pdf->Output(); 
}else{
    $query = "SELECT * FROM `insuprodf` WHERE FechaRegistro >= DATE_SUB(CURDATE(), INTERVAL 1 MONTH )";
    $smt = $CNX->prepare($query);
    $smt->execute();
    
    
    $pdf = new PDF();
    $pdf->AliasNbPages();
    $pdf->AddPage();
    $pdf->SetFont('Arial','',9);
    $pdf->SetFillColor(225,225,225);
    
    while($row = $smt->fetch(PDO::FETCH_ASSOC)){
        $pdf->Cell(9, 10, $row['idInsuProdF'], 1, 0, 'C', 1);
        $pdf->Cell(20, 10, $row['idInsumo'], 1, 0, 'C', 1);
        $pdf->Cell(35, 10, $row['idProductoFinal'], 1, 0, 'C', 1);
        $pdf->Cell(25, 10, $row['precio'], 1, 0, 'C', 1);
        $pdf->Cell(25, 10, $row['cantidad'], 1, 0, 'C', 1);
        $pdf->Cell(25, 10, $row['FechaRegistro'], 1, 1, 'C', 1);
    }

    $pdf->Output(); 
}

