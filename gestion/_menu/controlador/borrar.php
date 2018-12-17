<?php

/**
  magia_version: 0.0.8
 * */
$accion = "borrar";
$pagina = "_menu";
if (permisos_tiene_permiso($accion, $pagina, $_usuarios_grupo)) {
    $_menu_id = mysql_real_escape_string($_REQUEST['_menu_id']);
    include "./_menu/modelos/borrar.php";
    logs_registrar($_usuarios_usuario, $_usuarios_grupo, $pagina, false, $accion, json_encode($_REQUEST), "$_menu_id",false);
} else {
    permisos_sin_permiso($accion, $pagina, $_usuarios_usuario);
} 
