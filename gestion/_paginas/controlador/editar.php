<?php

if (isset($_REQUEST['a']) == 'editar') {
    $_paginas_id = mysql_real_escape_string($_REQUEST['_paginas_id']);
    include "./_paginas/reg/post.php";
    include "./_paginas/modelos/editar.php";

    include "./_paginas/modelos/ver.php";
    include "./_paginas/reg/reg.php";
    include "./_paginas/vista/ver.php";
} else {
    $_paginas_id = mysql_real_escape_string($_REQUEST['_paginas_id']);
    include "./_paginas/modelos/ver.php";
    include "./_paginas/reg/reg.php";
    include "./_paginas/vista/editar.php";
}