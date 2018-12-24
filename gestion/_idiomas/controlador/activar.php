<?php

if (isset($_REQUEST['a']) == 'activar') {
    $_idiomas_idioma = mysql_real_escape_string($_REQUEST['_idiomas_idioma']);
    $_idiomas_activo = mysql_real_escape_string($_REQUEST['_idiomas_activo']);
//        include "./_idiomas/reg/post.php";
    include "./_idiomas/modelos/activar.php";
    echo '<meta http-equiv="refresh" content="0; url=index.php?p=' . $p . '&c=index">';
} 