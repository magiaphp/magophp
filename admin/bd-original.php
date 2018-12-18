<?php
switch ($_SERVER['SERVER_NAME']) {
    case "127.0.0.1":
    case "localhost":
    case "192.168.1.26":
        $bd_servidor = "localhost";
        $bd_bdatos = "test";
        $bd_usuario = "root";
        $bd_clave = "root";
       // error_reporting(E_ALL);
       // ini_set('display_errors', 1);
        break;
    case "http://audio.facturas.be":
    case "audio.facturas.be":
    case "164.132.228.145":
        $bd_servidor = "localhost";
        $bd_bdatos = "facturas_labo";
        $bd_usuario = "facturas_labo";
        $bd_clave = "1!eQ.ed(Ung0";
        break;
    default:
        break;
}