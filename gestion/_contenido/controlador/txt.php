<?php

$_contenido_id = mysql_real_escape_string($_REQUEST['_contenido_id']);
include "./_contenido/modelos/ver.php";
include "./_contenido/reg/reg.php";
include "./_contenido/vista/txt.php";
