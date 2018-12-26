<?php

$_grupos_id = mysql_real_escape_string($_REQUEST['_grupos_id']);
include "./_grupos/modelos/var.php";
$html = file_get_contents("./_grupos/vista/var.php");
include "./_grupos/reg/var.php";
// aca la traduccion no va ya que imprimimos el html directo 
echo $html;
