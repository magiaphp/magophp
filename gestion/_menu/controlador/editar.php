<?php

if (isset($_REQUEST['a']) == 'editar') {
    $_menu_id = mysql_real_escape_string($_REQUEST['_menu_id']);
    include "./_menu/reg/post.php";
    include "./_menu/modelos/editar.php";
    logs_registrar($_usuarios_usuario, $_usuarios_grupo, $pagina, false, $accion, json_encode($_POST), $_menu_id, false);
    include "./_menu/modelos/ver.php";
    include "./_menu/reg/reg.php";
    include "./_menu/vista/ver.php";
} else {
    $_menu_id = mysql_real_escape_string($_REQUEST['_menu_id']);
    include "./_menu/modelos/ver.php";
    include "./_menu/reg/reg.php";
    include "./_menu/vista/editar.php";
}