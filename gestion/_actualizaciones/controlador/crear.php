<?php

if (isset($_REQUEST['a']) == 'crear') {
    include "./_actualizaciones/reg/post.php";
    include "./_actualizaciones/modelos/crear.php";
    if (!$config_debug) {
        echo '<meta http-equiv="refresh" content="0; url=index.php?p=' . $p . '&c=index">';
    }
} else {
    include "./_actualizaciones/vista/crear.php";
}