<?php 
 
                        // Instanciation of inherited class
                        $pdf = new PDF();
                        $pdf->AliasNbPages();
                        $pdf->AddPage();
                        $pdf->SetFont("Times", "", 12);


                        $pdf->Cell($w*12, $h, "$p", 0, $ln, $align, $fill, $link);
                        $pdf->Ln(10);
                        //********************
                        $pdf->Cell($w * 1, $h, "#", $border, $ln, $align, $fill, $link);

                         $pdf->Cell($w * 1, $h, _tr("version"), $border, $ln, $align, $fill, $link);
 $pdf->Cell($w * 1, $h, _tr("requiere"), $border, $ln, $align, $fill, $link);
 $pdf->Cell($w * 1, $h, _tr("nombre"), $border, $ln, $align, $fill, $link);
 $pdf->Cell($w * 1, $h, _tr("descripcion"), $border, $ln, $align, $fill, $link);
 $pdf->Cell($w * 1, $h, _tr("ejecutar"), $border, $ln, $align, $fill, $link);
 $pdf->Cell($w * 1, $h, _tr("estatus"), $border, $ln, $align, $fill, $link);
 $pdf->Ln();
                //********************
                $i = 1;
                include "./_actualizaciones/modelos/pdf.php";
                while ($_actualizaciones = mysql_fetch_array($sql)) {
                    include "./_actualizaciones/reg/reg.php";
                    $pdf->Cell($w * 1, $h, $i, $border, $ln, $align, $fill, $link); $pdf->Cell($w * 1, $h, $_actualizaciones_version, $border, $ln, $align, $fill, $link);
 $pdf->Cell($w * 1, $h, $_actualizaciones_requiere, $border, $ln, $align, $fill, $link);
 $pdf->Cell($w * 1, $h, $_actualizaciones_nombre, $border, $ln, $align, $fill, $link);
 $pdf->Cell($w * 1, $h, $_actualizaciones_descripcion, $border, $ln, $align, $fill, $link);
 $pdf->Cell($w * 1, $h, $_actualizaciones_ejecutar, $border, $ln, $align, $fill, $link);
 $pdf->Cell($w * 1, $h, $_actualizaciones_estatus, $border, $ln, $align, $fill, $link);


                    $pdf->Ln();
                    $i++;
                }
                //********************
                $pdf->Output();

                  
