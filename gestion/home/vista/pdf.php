<?php

$pdf = new FPDF();

$w = 64; // 0 hasta el margen derecho
$h = 10; // alto por defecto
$txt = 'a';
$border = 'LTRB';
$ln = 1; // siguiente
$align = "L";
$fill = false;
$link = false;

$pdf->AddPage();
$pdf->SetFont('Arial', 'B', 16);



$pdf->Cell($w, $h, "Titulo", $border, 0, $align, $fill, $link);
$pdf->Cell($w, $h, "Titulo", $border, 0, $align, $fill, $link);
$pdf->Cell($w, $h, "Titulo 2", $border, 1, $align, $fill, $link);
//Fecha
$pdf->Cell($w * 2, $h, _tr("Fecha").' : '.$pedidos_fecha, $border, 0, $align, $fill, $link);
$pdf->Cell($w, $h, "$i - der", $border, 1, $align, $fill, $link);
//Contacto
$pdf->Cell($w * 2, $h, "Fecha", $border, 0, $align, $fill, $link);
$pdf->Cell($w, $h, "$i - der", $border, 1, $align, $fill, $link);


$pdf->Ln();



$pdf->Cell($w, $h, "Titulo", $border, 0, $align, $fill, $link);
$pdf->Cell($w, $h, "Titulo", $border, 0, $align, $fill, $link);
$pdf->Cell($w, $h, "Titulo 2", $border, 1, $align, $fill, $link);
for ($i = 1; $i < 8; $i++) {
    $pdf->Cell($w, $h, "$i", $border, 0, $align, $fill, $link);
    $pdf->Cell($w, $h, "$i - izq", $border, 0, $align, $fill, $link);
    $pdf->Cell($w, $h, "$i - der", $border, 1, $align, $fill, $link);
}
$pdf->Ln();




$pdf->Cell($w, $h, "Titulo", $border, 0, $align, $fill, $link);
$pdf->Cell($w, $h, "Titulo", $border, 0, $align, $fill, $link);
$pdf->Cell($w, $h, "Titulo 2", $border, 1, $align, $fill, $link);
for ($i = 1; $i < 8; $i++) {
    $pdf->Cell($w, $h, "$i - izq", $border, 0, $align, $fill, $link);
    $pdf->Cell($w, $h, "$i - izq", $border, 0, $align, $fill, $link);
    $pdf->Cell($w, $h, "$i - der", $border, 1, $align, $fill, $link);
}
$pdf->Ln();

$pdf->MultiCell($w, $h, $txt, $border, $align, $fill);






$pdf->Output();
