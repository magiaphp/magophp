<?php

/**
  magia_version: 0.0.11
 * */
switch ($_SERVER["SERVER_NAME"]) {
    case "127.0.0.1":
    case "localhost":
        //case "192.168.1.26":
        $bd_servidor = "localhost";
        $bd_bdatos = "mago";
        $bd_usuario = "root";
        $bd_clave = "root";
        error_reporting(E_ALL);
        ini_set("display_errors", 1);
        break;
    case "http://npp.coello.be":
    case "npp.coello.be":
    case "164.132.228.145":
        //error_reporting(E_ALL);
        //ini_set("display_errors", 1);
        $bd_servidor = "localhost";
        $bd_bdatos = "coello_npp";
        $bd_usuario = "coello_npp";
        $bd_clave = "{)m[iSc+&(z;";
        break;
    default:
        break;
}