<?php

// Instanciation of inherited class
$pdf = new PDF();
$pdf->AliasNbPages();
$pdf->AddPage();
$pdf->SetFont('Times', '', 12);






$pdf->Cell($w*12, $h, "$p", 0, $ln, $align, $fill, $link);
$pdf->Ln(10);



$pdf->Cell($w * 1, $h, '#', $border, $ln, $align, $fill, $link);
$pdf->Cell($w * 1, $h, 'ID', $border, $ln, $align, $fill, $link);
$pdf->Cell($w * 10, $h, _tr("Grupo"), $border, $ln, $align, $fill, $link);

$pdf->Ln();

$i = 1;
include './_grupos/modelos/pdf.php';
while ($_grupos = mysql_fetch_array($sql)) {
    include "./_grupos/reg/reg.php";
    $pdf->Cell($w * 1, $h, $i, $border, $ln, $align, $fill, $link);
    $pdf->Cell($w * 1, $h, $_grupos_id, $border, $ln, $align, $fill, $link);
    $pdf->Cell($w * 10, $h, $_grupos_grupo, $border, $ln, $align, $fill, $link);
    
    $pdf->Ln();
    $i++;
}







$pdf->Output();
