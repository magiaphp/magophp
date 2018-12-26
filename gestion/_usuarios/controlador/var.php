<?php

$t_usuarios_id = mysql_real_escape_string($_REQUEST['t_usuarios_id']);
include "./_usuarios/modelos/var.php";
$html = file_get_contents("./_usuarios/vista/var.php");
include "./_usuarios/reg/var.php";
// aca la traduccion no va ya que imprimimos el html directo 
echo $html;
