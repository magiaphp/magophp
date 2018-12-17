<?php


$t_usuarios_grupo = (isset($_GET['t_usuarios_grupo'])) ? mysql_real_escape_string(trim($_GET['t_usuarios_grupo'])):null;
$t_usuarios_usuario = (isset($_GET['t_usuarios_usuario'])) ? mysql_real_escape_string(trim($_GET['t_usuarios_usuario'])):null;
$t_usuarios_clave = (isset($_GET['t_usuarios_clave'])) ? mysql_real_escape_string(trim($_GET['t_usuarios_clave'])):genera_clave();
$t_usuarios_estatus = (isset($_GET['t_usuarios_estatus'])) ? mysql_real_escape_string(trim($_GET['t_usuarios_estatus'])):null;



