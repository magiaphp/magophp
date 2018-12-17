<?php
/**
 * 
 */
$dbh = new PDO("mysql:host=$bd_servidor; dbname=$bd_bdatos", $bd_usuario, $bd_clave, array(
           PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8"));