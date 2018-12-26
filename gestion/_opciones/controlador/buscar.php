<?php

$inicia = (isset($_REQUEST['pag']) && $_REQUEST['pag'] != 0 ) ? $_REQUEST['pag'] * $cfg_limite_items_en_tablas : 0;
include "./_opciones/reg/get.php";
include "./_opciones/modelos/buscar.php";
include "./_opciones/vista/index.php";
