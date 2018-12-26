<?php

if (isset($_REQUEST['a']) == 'crear') {
    include "./_traducciones/reg/post.php";
    include "./_traducciones/modelos/crear.php";
    echo '<meta http-equiv="refresh" content="0; url=index.php?p=_contenido&c=atraducir">';
} else {
    include "./_traducciones/vista/crear.php";
}