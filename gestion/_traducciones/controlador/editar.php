<?php

if (isset($_REQUEST['a']) == 'editar') {
    $_traducciones_id = mysql_real_escape_string($_REQUEST['_traducciones_id']);
    include "./_traducciones/reg/post.php";
    include "./_traducciones/modelos/editar.php";

    include "./_traducciones/modelos/ver.php";
    include "./_traducciones/reg/reg.php";
    include "./_traducciones/vista/ver.php";
    logs_registrar($_usuarios_usuario, $_usuarios_grupo, $pagina, false, $accion, json_encode($_REQUEST), $_traducciones_id, false);
} else {
    $_traducciones_id = mysql_real_escape_string($_REQUEST['_traducciones_id']);
    include "./_traducciones/modelos/ver.php";
    include "./_traducciones/reg/reg.php";
    include "./_traducciones/vista/editar.php";
}