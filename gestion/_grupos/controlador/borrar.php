<?php

$_grupos_id = mysql_real_escape_string($_REQUEST['_grupos_id']);
include "./_grupos/modelos/borrar.php";

logs_registrar($_usuarios_usuario, $_usuarios_grupo, $pagina, false, $accion, json_encode($_REQUEST), $_grupos_id, false);
