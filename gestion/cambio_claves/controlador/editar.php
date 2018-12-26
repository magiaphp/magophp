<?php

if (isset($_REQUEST['a']) == 'editar') {
    $cambio_claves_id = mysql_real_escape_string($_REQUEST['cambio_claves_id']);
    include "./cambio_claves/reg/post.php";
    include "./cambio_claves/modelos/editar.php";

    include "./cambio_claves/modelos/ver.php";
    include "./cambio_claves/reg/reg.php";
    include "./cambio_claves/vista/ver.php";
} else {
    $cambio_claves_id = mysql_real_escape_string($_REQUEST['cambio_claves_id']);
    include "./cambio_claves/modelos/ver.php";
    include "./cambio_claves/reg/reg.php";
    include "./cambio_claves/vista/editar.php";
}

    