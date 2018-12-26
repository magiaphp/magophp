<?php

if (isset($_REQUEST['a']) == 'editar') {
    $_actualizaciones_id = mysql_real_escape_string($_REQUEST['_actualizaciones_id']);
    include "./_actualizaciones/reg/post.php";
    include "./_actualizaciones/modelos/editar.php";
} else {
    $_actualizaciones_id = mysql_real_escape_string($_REQUEST['_actualizaciones_id']);
    include "./_actualizaciones/modelos/ver.php";
    include "./_actualizaciones/reg/reg.php";
    include "./_actualizaciones/vista/editar.php";
}