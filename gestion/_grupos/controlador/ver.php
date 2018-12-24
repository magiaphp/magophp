<?php

$_grupos_id = mysql_real_escape_string($_REQUEST['_grupos_id']);
include "./_grupos/modelos/ver.php";
include "./_grupos/reg/reg.php";
include "./_grupos/vista/ver.php";

logs_historico($p, $c, $_grupos_id);
