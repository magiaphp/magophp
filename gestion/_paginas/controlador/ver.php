<?php

$_paginas_id = mysql_real_escape_string($_REQUEST['_paginas_id']);
include "./_paginas/modelos/ver.php";
include "./_paginas/reg/reg.php";
include "./_paginas/vista/ver.php";
logs_historico($p, $c, $_paginas_id);
