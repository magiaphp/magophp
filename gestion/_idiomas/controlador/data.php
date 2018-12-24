<?php

$_idiomas_id = mysql_real_escape_string($_REQUEST['_idiomas_id']);
include "./_idiomas/modelos/ver.php";
include "./_idiomas/reg/reg.php";
include "./_idiomas/vista/data.php";
