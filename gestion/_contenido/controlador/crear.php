<?php

if (isset($_REQUEST['a']) == 'crear') {
    // include "./_contenido/reg/post.php";
    // include "./_contenido/modelos/crear.php";
} else {

    mensaje("info", "Contacte con el administrador");
    mensaje("info", "El contenido se genera automaticamnte, no puede agregar");

    //include "./_contenido/vista/crear.php";
}