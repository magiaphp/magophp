<?php

if (isset($_REQUEST['a']) == 'crear') {
    include "./logs/reg/post.php";
    include "./logs/modelos/crear.php";
    if (!$config_debug) {
        echo '<meta http-equiv="refresh" content="0; url=index.php?p=' . $p . '&c=index">';
    }
} else {
    include "./logs/vista/crear.php";
}
