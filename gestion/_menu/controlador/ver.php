<?php

$_menu_id = mysql_real_escape_string($_REQUEST['_menu_id']);
include "./_menu/modelos/ver.php";
include "./_menu/reg/reg.php";
include "./_menu/vista/ver.php";

logs_historico($p, $c, $_menu_id);
