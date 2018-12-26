<?php

$contactos_id = mysql_real_escape_string($_REQUEST['contactos_id']);
include "./contactos/modelos/ver.php";
include "./contactos/reg/reg.php";
include "./contactos/vista/txt.php";