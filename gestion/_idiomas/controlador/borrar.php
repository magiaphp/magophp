<?php

$_idiomas_id = mysql_real_escape_string($_REQUEST['_idiomas_id']);
include "./_idiomas/modelos/borrar.php";

logs_registrar($_usuarios_usuario, $_usuarios_grupo, $pagina, false, $accion, json_encode($_REQUEST), json_encode($_REQUEST), false);

redireccion("index.php?p=_idiomas");