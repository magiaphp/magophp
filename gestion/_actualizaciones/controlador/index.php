<?php

$inicia = (isset($_REQUEST['pag']) && $_REQUEST['pag'] != 0 ) ? $_REQUEST['pag'] * $cfg_limite_items_en_tablas : 0;
include "./_actualizaciones/modelos/index.php";
include "./_actualizaciones/vista/index.php";
