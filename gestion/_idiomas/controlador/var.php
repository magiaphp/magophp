<?php

$_idiomas_id = mysql_real_escape_string($_REQUEST['_idiomas_id']);
include "./_idiomas/modelos/var.php";
$html = file_get_contents("./_idiomas/vista/var.php");
include "./_idiomas/reg/var.php";
// aca la traduccion no va ya que imprimimos el html directo 
echo $html;
