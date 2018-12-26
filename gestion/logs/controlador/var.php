<?php

$logs_id = mysql_real_escape_string($_REQUEST['logs_id']);
include "./logs/modelos/var.php";
$html = file_get_contents("./logs/vista/var.php");
include "./logs/reg/var.php";
// aca la traduccion no va ya que imprimimos el html directo 
echo $html;
