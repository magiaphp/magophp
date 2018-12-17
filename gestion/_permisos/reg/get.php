<?php

/**
  magia_version: 0.0.8
 * */
//$_permisos_id = mysql_real_escape_string($_GET['_permisos_id']); 
$_permisos_grupo = mysql_real_escape_string($_GET['_permisos_grupo']);
$_permisos_pagina = mysql_real_escape_string($_GET['_permisos_pagina']);
// si se envia otra cosa que numeros, se pone por defecto 0000




$ver = (isset($_GET['ver'])) ? mysql_real_escape_string($_GET['ver']) : "0";
$crear = (isset($_GET['crear'])) ? mysql_real_escape_string($_GET['crear']) : "0";
$editar = (isset($_GET['editar'])) ? mysql_real_escape_string($_GET['editar']) : "0";
$borrar = (isset($_GET['borrar'])) ? mysql_real_escape_string($_GET['borrar']) : "0";

$_permisos_permiso = $ver.$crear.$editar.$borrar; 
