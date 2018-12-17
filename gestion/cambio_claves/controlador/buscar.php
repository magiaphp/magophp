<?php

/**
  magia_version: 0.0.8
 * */
$accion = "buscar";
$pagina = "cambio_claves";
if (permisos_tiene_permiso($accion, $pagina, $_usuarios_grupo)) {
    $inicia = (isset($_REQUEST['pag']) && $_REQUEST['pag'] != 0 ) ? $_REQUEST['pag'] * $cfg_limite_items_en_tablas : 0;
    include "./cambio_claves/reg/get.php";
    include "./cambio_claves/modelos/buscar.php";
    include "./cambio_claves/vista/index.php";
} else {
    permisos_sin_permiso($accion, $pagina, $_usuarios_usuario);
} 
