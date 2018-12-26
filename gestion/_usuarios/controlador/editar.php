<?php

if (isset($_REQUEST['a']) == 'editar') {
    $t_usuarios_id = mysql_real_escape_string($_REQUEST['t_usuarios_id']);
    include "./_usuarios/reg/post.php";
    include "./_usuarios/modelos/editar.php";

    include "./_usuarios/modelos/ver.php";
    include "./_usuarios/reg/ttt.php";
    include "./_usuarios/vista/ver.php";
} else {
    $t_usuarios_id = mysql_real_escape_string($_REQUEST['t_usuarios_id']);
    include "./_usuarios/modelos/ver.php";
    include "./_usuarios/reg/ttt.php";
    include "./_usuarios/vista/editar.php";
}