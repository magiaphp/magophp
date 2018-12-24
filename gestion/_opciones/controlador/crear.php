<?php

if (isset($_REQUEST['a']) == 'crear') {
    include "./_opciones/reg/post.php";
    include "./_opciones/modelos/crear.php";
    if (!$config_debug) {
        echo '<meta http-equiv="refresh" content="0; url=index.php?p=' . $p . '&c=index">';
    }
} else {
    include "./_opciones/vista/crear.php";
}
