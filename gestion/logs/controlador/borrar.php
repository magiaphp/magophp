<?php

$logs_id = mysql_real_escape_string($_REQUEST['logs_id']);
include "./logs/modelos/borrar.php";
