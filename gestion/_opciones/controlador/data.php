<?php

$_opciones_id = mysql_real_escape_string($_REQUEST['_opciones_id']);
include "./_opciones/modelos/ver.php";
include "./_opciones/reg/reg.php";
include "./_opciones/vista/data.php";
