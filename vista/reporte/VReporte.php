<?php
/* =====================================
            VISTA REPORTE
====================================== */

require('pdf/fpdf.php');

$articulos = unserialize($_GET['articulos']);

$pdf = new FPDF('P', 'mm', 'Letter');

// MÁRGENES: 2 cm
$pdf->SetMargins(20, 20, 20);
$pdf->SetAutoPageBreak(true, 20);

$pdf->AddPage();

// TITULO
$pdf->SetFont('Arial', 'B', 20);
$pdf->Cell(0, 10, "REPORTE DE STOCK DE ARTICULOS", 0, 1, 'C', 0);
$pdf->Cell(0, 10, "", 0, 1, 'C', 0);

// ENCABEZADO TABLA
$pdf->SetFont('Arial', 'B', 10);
$pdf->SetFillColor(230, 230, 230);

$pdf->Cell(30, 15, 'CODIGO', 1, 0, 'C', 1);
$pdf->Cell(100, 15, 'ARTICULO', 1, 0, 'C', 1);
$pdf->Cell(50, 15, 'STOCK', 1, 1, 'C', 1);

// TABLA DE DATOS
$pdf->SetFont('Arial', '', 10);

foreach ($articulos as $a) {
    $pdf->Cell(30, 10, $a['codigo'], 1, 0, 'L', 0);
    $pdf->Cell(100, 10, utf8_decode($a['nombre']), 1, 0, 'L', 0);
    $pdf->Cell(50, 10, $a['stock'], 1, 1, 'C', 0);
}

$pdf->Output();
