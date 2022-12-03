<?php

$nombre = $_POST['nombre'];
$edad = $_POST['edad'];

require('./FPDF/fpdf.php');

$pdf = new FPDF();
$pdf->AddPage();
$pdf->SetFont('Arial','B',16);
$pdf->Cell(40,10,'Nombre ' .$nombre);
$pdf->Cell(40,10,'edad' .$edad);
$pdf->Output();
?>