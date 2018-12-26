<?php

if (isset($_REQUEST['a']) == 'editar') {
    $_grupos_id = mysql_real_escape_string($_REQUEST['_grupos_id']);
    include "./_grupos/reg/post.php";
    include "./_grupos/modelos/editar.php";

    logs_registrar($_usuarios_usuario, $_usuarios_grupo, $pagina, false, $accion, json_encode($_POST), $_grupos_id, false);

    include "./_grupos/modelos/ver.php";
    include "./_grupos/reg/reg.php";
    include "./_grupos/vista/ver.php";
} else {
    $_grupos_id = mysql_real_escape_string($_REQUEST['_grupos_id']);
    include "./_grupos/modelos/ver.php";
    include "./_grupos/reg/reg.php";
    include "./_grupos/vista/editar.php";
}