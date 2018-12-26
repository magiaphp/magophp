<?php

$_paginas_id = mysql_real_escape_string($_REQUEST['_paginas_id']);
include "./_paginas/modelos/var.php";
$html = file_get_contents("./_paginas/vista/var.php");
include "./_paginas/reg/var.php";
// aca la traduccion no va ya que imprimimos el html directo 
echo $html;
