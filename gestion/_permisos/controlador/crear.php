<?php

if (isset($_REQUEST['a']) == 'crear') {

    include "./_permisos/reg/post.php";

    include "./_permisos/modelos/crear.php";

    echo '<meta http-equiv="refresh" content="0; url=index.php?p=' . $p . '&c=buscar&donde=grupo&busqueda=' . $_permisos_grupo . '">';
    //echo '<META http-equiv="refresh" content="0; URL=index.php?p='.$pagina.'">';
} else {
    include "./_permisos/vista/crear.php";
}