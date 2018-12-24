<?php

if (isset($_REQUEST['a']) == 'editar') {
    $logs_id = mysql_real_escape_string($_REQUEST['logs_id']);
    include "./logs/reg/post.php";
    include "./logs/modelos/editar.php";

    include "./logs/modelos/ver.php";
    include "./logs/reg/reg.php";
    include "./logs/vista/ver.php";
} else {
    $logs_id = mysql_real_escape_string($_REQUEST['logs_id']);
    include "./logs/modelos/ver.php";
    include "./logs/reg/reg.php";
    include "./logs/vista/editar.php";
}
