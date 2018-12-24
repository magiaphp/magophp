<?php

$cambio_claves_id = mysql_real_escape_string($_REQUEST['cambio_claves_id']);
include "./cambio_claves/modelos/var.php";
$html = file_get_contents("./cambio_claves/vista/var.php");
include "./cambio_claves/reg/var.php";
// aca la traduccion no va ya que imprimimos el html directo 
echo $html;
