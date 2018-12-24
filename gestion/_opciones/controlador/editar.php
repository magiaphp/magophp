<?php

if (isset($_REQUEST['a']) == 'editar') {
    $_opciones_id = mysql_real_escape_string($_REQUEST['_opciones_id']);



    $_opciones_opcion = (isset($_POST['_opciones_opcion'])) ? mysql_real_escape_string($_POST['_opciones_opcion']) : null;
    //$_opciones_valor = (isset($_POST['_opciones_valor'])) ? mysql_real_escape_string($_POST['_opciones_valor']) : null;
    $_opciones_grupo = (isset($_POST['_opciones_grupo'])) ? mysql_real_escape_string($_POST['_opciones_grupo']) : null;
 
    $_opciones_valor = json_encode($_POST['_opciones_valor']);
    
      //include "./_opciones/reg/post.php";
      include "./_opciones/modelos/editar.php";

      include "./_opciones/modelos/ver.php";
      include "./_opciones/reg/reg.php";
      include "./_opciones/vista/ver.php"; 
} else {
    $_opciones_id = mysql_real_escape_string($_REQUEST['_opciones_id']);
    include "./_opciones/modelos/ver.php";
    include "./_opciones/reg/reg.php";
    include "./_opciones/vista/editar.php";
}
