<?php

/**
  magia_version: 0.0.8
 * */
//$_permisos_id = mysql_real_escape_string($_POST['_permisos_id']); 
$_permisos_grupo = mysql_real_escape_string($_POST['_permisos_grupo']);
$_permisos_pagina = mysql_real_escape_string($_POST['_permisos_pagina']);
// si se envia otra cosa que numeros, se pone por defecto 0000




$ver = (isset($_POST['ver'])) ? mysql_real_escape_string($_POST['ver']) : "0";
$crear = (isset($_POST['crear'])) ? mysql_real_escape_string($_POST['crear']) : "0";
$editar = (isset($_POST['editar'])) ? mysql_real_escape_string($_POST['editar']) : "0";
$borrar = (isset($_POST['borrar'])) ? mysql_real_escape_string($_POST['borrar']) : "0";

$_permisos_permiso = $ver.$crear.$editar.$borrar; 

