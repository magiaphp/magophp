<?php

/**
  magia_version: 0.0.8
 * */
$t_usuarios_id = $t_usuarios['id'];
$t_usuarios_grupo = $t_usuarios['grupo'];
$t_usuarios_usuario = $t_usuarios['usuario'];
$t_usuarios_clave = $t_usuarios['clave'];
$t_usuarios_estatus = $t_usuarios['estatus'];
$t_usuarios_estatus_0 = "";
$t_usuarios_estatus_1 = "";
if ($t_usuarios_estatus == 0) {
    $t_usuarios_estatus_0 = " checked ";
    $t_usuarios_estatus_1 = "";
} else {
    $t_usuarios_estatus_0 = "";
    $t_usuarios_estatus_1 = "checked";
}  
