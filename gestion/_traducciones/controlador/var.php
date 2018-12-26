<?php

$_traducciones_id = mysql_real_escape_string($_REQUEST['_traducciones_id']);
include "./_traducciones/modelos/var.php";
$html = file_get_contents("./_traducciones/vista/var.php");
include "./_traducciones/reg/var.php";
// aca la traduccion no va ya que imprimimos el html directo 
echo $html;
