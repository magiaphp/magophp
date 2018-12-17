<?php

/**
  magia_version: 0.0.8
 * */
$accion = "ver";
$pagina = "_permisos";
if (permisos_tiene_permiso($accion, $pagina, $_usuarios_grupo)) {
    $inicia = (isset($_REQUEST['pag']) && $_REQUEST['pag'] != 0 ) ? $_REQUEST['pag'] * $cfg_limite_items_en_tablas : 0;
    include "./_permisos/modelos/index.php";
    include "./_permisos/vista/index.php";
    logs_historico($p, $c, false);
} else {
    permisos_sin_permiso($accion, $pagina, $_usuarios_usuario);
} 

