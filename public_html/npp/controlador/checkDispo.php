<?php
// verificar que las fechas s
    // sea bien fechas https://desarrolloweb.com/articulos/validar-fecha-php-formato-existencia.html
    // fecha de fin sea superior o egal a la fecha de inicio
    // 
//
$fi = mysql_real_escape_string($_REQUEST['fi']);
$ff = mysql_real_escape_string($_REQUEST['ff']);
$hi = mysql_real_escape_string($_REQUEST['hi']);

include "./public_html/npp/modelos/checkDispo.php";

include "./public_html/npp/vista/checkDispo.php";