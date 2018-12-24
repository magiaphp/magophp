<?php
session_start("magia_php");
include "../admin/bd.php";
include "../admin/coneccion.php";
include "../admin/conec.php";
include "z_verificar.php";
include "../admin/errores.php";
include "../admin/funciones.php";
include "../admin/configuracion.php";
include "../admin/funciones_sql.php";
//include "../admin/getbootstrap.php";
include "../admin/permisos.php";
include "../admin/traductor.php";
include "../admin/contenido.php";
//include "../admin/formularios.php";
//include "../admin/menu.php";
include "../admin/mensajes.php";
//include "../admin/paginacion.php";
_incluir_funciones();
$p = (isset($_REQUEST['p'])) ? $_REQUEST['p'] : "home";
$c = (isset($_REQUEST['c'])) ? $_REQUEST['c'] : "pdf";
//*****************************************************
//*****************************************************
//*****************************************************
//*****************************************************
require('../includes/pdml/fpdf.php');
class PDF extends FPDF
{
// Page header
function Header(){
    global $config_nombre_web, $config_direccion, $config_tel, $config_email_email, $config_url; 

    // Logo
    //$this->Image('./imagenes/logo.png',10,6,30);
    // Arial bold 15
    $this->SetFont('Arial','B',15);
    // Move to the right
    $this->Cell(80,10,"$config_nombre_web");
    // Title
//    $this->Cell(30,10,'Title',1,0,'C');
//    $this->Cell(80,10,"Title",1,0,'R');
    // Line break
    $this->Ln(20);
}

// Page footer
function Footer(){
    global $config_nombre_web, $config_direccion, $config_tel, $config_email_email, $config_url; 


    // Position at 1.5 cm from bottom
    $this->SetY(-20);
    // Arial italic 8
    $this->SetFont('Arial','I',8);
    
    
    $this->Cell("", 5, "$config_nombre_web $config_direccion", '', 1, 'C', 0);
    $this->Cell("", 5, "Tel: $config_tel - $config_email_email - $config_url", '', 1, 'C', 0);

    
    // Page number      
    $this->Cell(0,10,'Page '.$this->PageNo().'/{nb}',0,0,'C');
}
}
// valores por defecto
$w = 16; // 0 hasta el margen derecho
$h = 5; // alto por defecto
$txt = 'a';
$border = 'LTRB';
$ln = 0; // siguiente
$align = "L";
$fill = false;
$link = false;
include "../gestion/$p/controlador/$c.php";