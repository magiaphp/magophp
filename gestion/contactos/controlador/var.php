<?php

$contactos_id = mysql_real_escape_string($_REQUEST['contactos_id']);
include "./contactos/modelos/var.php";
$html = file_get_contents("./contactos/vista/var.php");
include "./contactos/reg/var.php";
// aca la traduccion no va ya que imprimimos el html directo 
echo $html;

