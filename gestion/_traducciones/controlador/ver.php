<?php

$_traducciones_id = mysql_real_escape_string($_REQUEST['_traducciones_id']);
include "./_traducciones/modelos/ver.php";
include "./_traducciones/reg/reg.php";
include "./_traducciones/vista/ver.php";
logs_historico($p, $c, $_traducciones_id);
