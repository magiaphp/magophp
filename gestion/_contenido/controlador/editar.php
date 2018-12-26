<?php

if (isset($_REQUEST['a']) == 'editar') {
    $_contenido_id = mysql_real_escape_string($_REQUEST['_contenido_id']);
    include "./_contenido/reg/post.php";
    include "./_contenido/modelos/editar.php";

    include "./_contenido/modelos/ver.php";
    include "./_contenido/reg/reg.php";
    include "./_contenido/vista/ver.php";
} else {
    /* $_contenido_id = mysql_real_escape_string($_REQUEST['_contenido_id']);
      include "./_contenido/modelos/ver.php";
      include "./_contenido/reg/reg.php";
      include "./_contenido/vista/editar.php";
     * 
     */
    mensaje("info", "Contacte con el administrador");
}