<?php

$inicia = (isset($_REQUEST['pag']) && $_REQUEST['pag'] != 0 ) ? $_REQUEST['pag'] * $cfg_limite_items_en_tablas : 0;
include "./_contenido/modelos/atraducir.php";

if (!$total_items) {
    mensaje('info', 'Todo parace estar traducido');
} else {
    //include "./_contenido/vista/atraducir.php";     
}
include "./_contenido/vista/atraducir.php";
