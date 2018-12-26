<?php

$inicia = (isset($_REQUEST['pag']) && $_REQUEST['pag'] != 0 ) ? $_REQUEST['pag'] * $cfg_limite_items_en_tablas : 0;

$_opciones_grupo = mysql_real_escape_string($_REQUEST['_opciones_grupo']);


//include "./_opciones/reg/get.php";
include "./_opciones/modelos/buscar_segun_grupo.php";
include "./_opciones/vista/index.php";
