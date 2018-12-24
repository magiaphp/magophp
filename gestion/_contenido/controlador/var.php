<?php

$contenido_id = mysql_real_escape_string($_REQUEST['_contenido_id']);
include "./_contenido/modelos/var.php";
$html = file_get_contents("./_contenido/vista/var.php");
include "./_contenido/reg/var.php";
// aca la traduccion no va ya que imprimimos el html directo 
echo $html;
