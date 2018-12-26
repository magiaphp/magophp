<?php

$busqueda = mysql_real_escape_string($_GET['busqueda']);
$donde = mysql_real_escape_string($_GET['donde']);

$inicia = (isset($_REQUEST['pag']) && $_REQUEST['pag'] != 0 ) ? $_REQUEST['pag'] * $cfg_limite_items_en_tablas : 0;

switch ($donde) {
    case 'grupo':
        include "./_permisos/modelos/buscar_grupo.php";
        break;
    case 'pagina':
        include "./_permisos/modelos/buscar_pagina.php";
        break;
    case 'permiso':
        include "./_permisos/modelos/buscar_permiso.php";
        break;

    default:
        break;
}


include "./_permisos/vista/index.php";
