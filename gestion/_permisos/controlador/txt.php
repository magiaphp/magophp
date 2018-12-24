<?php

$_permisos_id = mysql_real_escape_string($_REQUEST['_permisos_id']);
include "./_permisos/modelos/ver.php";
include "./_permisos/reg/reg.php";
include "./_permisos/vista/txt.php";
