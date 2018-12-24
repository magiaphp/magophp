<?php

$_usuarios_id = mysql_real_escape_string($_REQUEST['_usuarios_id']);
include "./_usuarios/modelos/borrar.php";
