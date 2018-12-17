<?php
define('FPDF_FONTPATH','font/');
//above line is import to define, otherwise it gives an error : Could not include font metric file
require('fpdf.php');

$pdf = new FPDF();
$pdf->AddPage();
$pdf->SetFont('Arial','B',16);
$pdf->Cell(40,10,'Hello World!');
$pdf->Output();
?>
<pdml>
 <body>
  <font face="Arial" size="16pt">Hello, World</font>
 </body>
</pdml>
