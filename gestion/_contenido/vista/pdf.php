<?php

// Instanciation of inherited class
$pdf = new PDF();
$pdf->AliasNbPages();
$pdf->AddPage();
$pdf->SetFont('Times', '', 12);
for ($i = 1; $i <= 1; $i++)
    $pdf->Cell(0, 10, 'Printing line number ' . $i, 0, 1);


$pdf->Cell($w * 1, $h, '#', $border, $ln, $align, $fill, $link);
$pdf->Cell($w * 1, $h, 'ID', $border, $ln, $align, $fill, $link);
$pdf->Cell($w * 7, $h, 'Frase', $border, $ln, $align, $fill, $link);
$pdf->Cell($w * 3, $h, 'Contexto', $border, $ln, $align, $fill, $link);
$pdf->Ln();

$i = 1;
include './_contenido/modelos/pdf.php';
while ($_contenido = mysql_fetch_array($sql)) {
    include "./_contenido/reg/reg.php";
    $pdf->Cell($w * 1, $h, $i, $border, $ln, $align, $fill, $link);
    $pdf->Cell($w * 1, $h, $_contenido_id, $border, $ln, $align, $fill, $link);
    $pdf->Cell($w * 7, $h, $_contenido_frase, $border, $ln, $align, $fill, $link);
    $pdf->Cell($w * 3, $h, $_contenido_contexto, $border, $ln, $align, $fill, $link);    
    $pdf->Ln();
    $i++;
}







$pdf->Output();
