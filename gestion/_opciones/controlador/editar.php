<?php

if (isset($_REQUEST['a']) == 'editar') {
    $_opciones_id = mysql_real_escape_string($_REQUEST['_opciones_id']);
    include "./_opciones/reg/post.php";
    include "./_opciones/modelos/editar.php";

    include "./_opciones/modelos/ver.php";
    include "./_opciones/reg/reg.php";
    include "./_opciones/vista/ver.php";
} else {
    $_opciones_id = mysql_real_escape_string($_REQUEST['_opciones_id']);
    include "./_opciones/modelos/ver.php";
    include "./_opciones/reg/reg.php";
    include "./_opciones/vista/editar.php";
}
