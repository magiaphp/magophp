<?php

$_actualizaciones_id = mysql_real_escape_string($_REQUEST['_actualizaciones_id']);
include "./_actualizaciones/modelos/var.php";
include "./_actualizaciones/reg/reg.php";
$html = file_get_contents("./_actualizaciones/vista/var.php");
include "./_actualizaciones/reg/var.php";
// aca la traduccion no va ya que imprimimos el html directo 
echo $html;
