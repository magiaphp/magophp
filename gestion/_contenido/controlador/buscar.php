<?php

$b = mysql_real_escape_string($_REQUEST['b']);

include "./_contenido/modelos/buscar.php";
include "./_contenido/vista/index.php";
