<?php

if (isset($_GET['a']) && $_GET['a'] == "borrar") {
    $_permisos_id = mysql_real_escape_string($_REQUEST['_permisos_id']);
    include "./_permisos/modelos/borrar.php";

    redireccion("index.php?p=_permisos");
} else {
    $_permisos_id = mysql_real_escape_string($_REQUEST['_permisos_id']);



    include "./_permisos/modelos/ver.php";
    include "./_permisos/reg/reg.php";

    include "./_permisos/vista/ver.php";

    if (permisos_tiene_permiso("borrar", "_permisos", $_usuarios_grupo)) {
        include "./_permisos/vista/borrar.php";
    }
}
