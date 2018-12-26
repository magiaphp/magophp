<?php

$_permisos_id = mysql_real_escape_string($_REQUEST['_permisos_id']);
include "./_permisos/modelos/var.php";
$html = file_get_contents("./_permisos/vista/var.php");
include "./_permisos/reg/var.php";
// aca la traduccion no va ya que imprimimos el html directo 
echo $html;
