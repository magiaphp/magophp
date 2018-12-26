<?php

$cambio_claves_id = mysql_real_escape_string($_REQUEST['cambio_claves_id']);
include "./cambio_claves/modelos/ver.php";
include "./cambio_claves/reg/reg.php";
include "./cambio_claves/vista/ver.php";
