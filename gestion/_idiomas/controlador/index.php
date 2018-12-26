<?php

$inicia = (isset($_REQUEST['pag']) && $_REQUEST['pag'] != 0 ) ? $_REQUEST['pag'] * $cfg_limite_items_en_tablas : 0;
include "./_idiomas/modelos/index.php";
include "./_idiomas/vista/index.php";
logs_historico($p, $c, false);
