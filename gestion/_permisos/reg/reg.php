<?php

/**
  magia_version: 0.0.8
 * */
$_permisos_id       = $_permisos['id'];
$_permisos_grupo    = $_permisos['grupo'];
$_permisos_pagina   = $_permisos['pagina'];
$_permisos_permiso  = $_permisos['permiso'];

$ver    = $_permisos_permiso[0];
$crear  = $_permisos_permiso[1];
$editar = $_permisos_permiso[2];
$borrar = $_permisos_permiso[3];


$v_0_checked = (!$ver) ?    ' checked="" ' : '';
$v_1_checked = ($ver) ?     ' checked="" ' : '';

$c_0_checked = (!$crear) ?  ' checked="" ' : '';
$c_1_checked = ($crear) ?   ' checked="" ' : '';

$e_0_checked = (!$editar) ? ' checked="" ' : '';
$e_1_checked = ($editar) ?  ' checked="" ' : '';

$b_0_checked = (!$borrar) ? ' checked="" ' : '';
$b_1_checked = ($borrar) ?  ' checked="" ' : '';

