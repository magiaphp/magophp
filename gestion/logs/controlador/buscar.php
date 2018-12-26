<?php

$inicia = (isset($_REQUEST['pag']) && $_REQUEST['pag'] != 0 ) ? $_REQUEST['pag'] * $cfg_limite_items_en_tablas : 0;
include "./logs/reg/get.php";
include "./logs/modelos/buscar.php";
include "./logs/vista/index.php";
