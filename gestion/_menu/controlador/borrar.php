<?php

$_menu_id = mysql_real_escape_string($_REQUEST['_menu_id']);

include "./_menu/modelos/borrar.php";

logs_registrar($_usuarios_usuario, $_usuarios_grupo, $pagina, false, $accion, json_encode($_REQUEST), "$_menu_id", false);

redireccion("index.php?p=_menu");