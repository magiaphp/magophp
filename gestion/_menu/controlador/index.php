<?php

$inicia = (isset($_REQUEST['pag']) && $_REQUEST['pag'] != 0 ) ? $_REQUEST['pag'] * $cfg_limite_items_en_tablas : 0;
include "./_menu/modelos/index.php";

//echo "$pagina $accion"; 


include "./_menu/vista/index.php";

logs_historico($pagina, $accion, false);


