<?php

$logs_id = mysql_real_escape_string($_REQUEST['logs_id']);
include "./logs/modelos/ver.php";
include "./logs/reg/reg.php";
include "./logs/vista/txt.php";
