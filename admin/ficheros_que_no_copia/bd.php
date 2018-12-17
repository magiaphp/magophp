<?php 
 /**  
 magia_version: 0.0.11 
 **/ 
switch ($_SERVER["SERVER_NAME"]) {
    case "127.0.0.1":
    case "localhost":
    //case "192.168.1.26":
        $bd_servidor = "localhost";
        $bd_bdatos = "demo";
        $bd_usuario = "root";
        $bd_clave = "root";
        error_reporting(E_ALL);
        ini_set("display_errors", 1);
        break;
    case "http://www.misuperweb.be":
    case "audio.facturas.be":
    case "123.456.789.012":
        $bd_servidor = "localhost";
        $bd_bdatos = "Web_base";
        $bd_usuario = "user";
        $bd_clave = "1!eQ.ed(Ung0";
        break;
    default:
        break;
}