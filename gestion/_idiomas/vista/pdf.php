<?php

// Instanciation of inherited class
$pdf = new PDF();
$pdf->AliasNbPages();
$pdf->AddPage();
$pdf->SetFont('Times', '', 12);


$pdf->Cell($w*12, $h, "$p", 0, $ln, $align, $fill, $link);
$pdf->Ln(10);
//********************
$pdf->Cell($w * 1, $h, '#', $border, $ln, $align, $fill, $link);
$pdf->Cell($w * 1, $h, 'ID', $border, $ln, $align, $fill, $link);
$pdf->Cell($w * 5, $h, _tr("Codigo"), $border, $ln, $align, $fill, $link);
$pdf->Cell($w * 5, $h, _tr("Idioma"), $border, $ln, $align, $fill, $link);
$pdf->Cell($w * 5, $h, _tr("Orden"), $border, $ln, $align, $fill, $link);
$pdf->Ln();
//********************
$i = 1;
include './_idiomas/modelos/pdf.php';
while ($_idiomas = mysql_fetch_array($sql)) {
    include "./_idiomas/reg/reg.php";
    $pdf->Cell($w * 1, $h, $i, $border, $ln, $align, $fill, $link);
    $pdf->Cell($w * 1, $h, $_idiomas_id, $border, $ln, $align, $fill, $link);
    $pdf->Cell($w * 5, $h, $_idiomas_idioma, $border, $ln, $align, $fill, $link);
    $pdf->Cell($w * 5, $h, $_idiomas_nombre, $border, $ln, $align, $fill, $link);
    $pdf->Cell($w * 5, $h, $_idiomas_orden, $border, $ln, $align, $fill, $link);
    
    $pdf->Ln();
    $i++;
}
//********************
$pdf->Output();
