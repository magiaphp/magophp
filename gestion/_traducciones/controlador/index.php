<?php

    $inicia = (isset($_REQUEST['pag']) && $_REQUEST['pag'] != 0 ) ? $_REQUEST['pag'] * $cfg_limite_items_en_tablas : 0;
    include "./_traducciones/modelos/index.php";
    include "./_traducciones/vista/index.php";
    logs_historico($p, $c, false);