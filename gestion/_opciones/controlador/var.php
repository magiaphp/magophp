<?php

$_opciones_id = mysql_real_escape_string($_REQUEST['_opciones_id']);
include "./_opciones/modelos/var.php";
$html = file_get_contents("./_opciones/vista/var.php");
include "./_opciones/reg/var.php";
// aca la traduccion no va ya que imprimimos el html directo 
echo $html;
