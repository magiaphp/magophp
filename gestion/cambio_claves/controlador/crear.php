<?php

if (isset($_REQUEST['a']) == 'crear') {
    include "./cambio_claves/reg/post.php";
    include "./cambio_claves/modelos/crear.php";
    if (!$config_debug) {
        echo '<meta http-equiv="refresh" content="0; url=index.php?p=' . $p . '&c=index">';
    }
} else {
    include "./cambio_claves/vista/crear.php";
}