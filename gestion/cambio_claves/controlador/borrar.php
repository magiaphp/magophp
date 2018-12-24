<?php

$cambio_claves_id = mysql_real_escape_string($_REQUEST['cambio_claves_id']);
include "./cambio_claves/modelos/borrar.php";
