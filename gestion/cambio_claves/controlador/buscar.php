<?php
    $inicia = (isset($_REQUEST['pag']) && $_REQUEST['pag'] != 0 ) ? $_REQUEST['pag'] * $cfg_limite_items_en_tablas : 0;
    include "./cambio_claves/reg/get.php";
    include "./cambio_claves/modelos/buscar.php";
    include "./cambio_claves/vista/index.php";