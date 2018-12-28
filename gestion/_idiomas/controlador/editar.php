<?php

if (isset($_REQUEST['a']) == 'editar') {
    $_idiomas_id = mysql_real_escape_string($_REQUEST['_idiomas_id']);
    include "./_idiomas/reg/post.php";
    include "./_idiomas/modelos/editar.php";
    logs_registrar($_usuarios_usuario, $_usuarios_grupo, $pagina, false, $accion, json_encode($_POST), $_idiomas_id, false);
    include "./_idiomas/modelos/ver.php";
    include "./_idiomas/reg/reg.php";
    include "./_idiomas/vista/ver.php";
} else {
    $_idiomas_id = mysql_real_escape_string($_REQUEST['_idiomas_id']);
    include "./_idiomas/modelos/ver.php";
    include "./_idiomas/reg/reg.php";
    include "./_idiomas/vista/editar.php";
    include "./_idiomas/vista/borrar.php";
}