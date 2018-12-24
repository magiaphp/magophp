<?php

if (isset($_REQUEST['a']) == 'editar') {
    $_permisos_id = mysql_real_escape_string($_REQUEST['_permisos_id']);
    include "./_permisos/reg/post.php";

    include "./_permisos/modelos/editar.php";
    logs_registrar($_usuarios_usuario, $_usuarios_grupo, $pagina, $controlador, $accion, json_encode($_POST), $_permisos_id, false);


    echo '<meta http-equiv="refresh" content="0; url=index.php?p=' . $p . '">';

    /*
      include "./_permisos/modelos/ver.php";
      include "./_permisos/reg/reg.php";
      include "./_permisos/vista/ver.php";
     * 
     */
} else {
    $_permisos_id = mysql_real_escape_string($_REQUEST['_permisos_id']);
    include "./_permisos/modelos/ver.php";
    include "./_permisos/reg/reg.php";
    include "./_permisos/vista/editar.php";
}