<?php
if( ! file_exists("admin/bd.php")){
    header("Location: gestion/instalar.php"); 
}
////session_start("magia_php") ;
//error_reporting(E_ALL);
//ini_set("display_errors", 1);
//include "z_verificar.php";
include "admin/bd.php";
include "admin/configuracion.php";
include "admin/coneccion.php";
include "admin/conec.php";
include "admin/funciones.php";
include "admin/funciones_sql.php";
include "admin/getbootstrap.php";
include "admin/permisos.php";
include "admin/traductor.php";
include "admin/contenido.php";
include "admin/formularios.php";
include "admin/menu.php";
include "admin/paginacion.php";
//Extenciones
include "extenciones/funciones/_opciones.php";
include "extenciones/funciones/tipo_parking.php";
//_incluir_funciones();
$aqui_seccion = "";
$aqui_pagina = "";


$p = (isset($_REQUEST["p"])) ? $_REQUEST["p"] : "index";
$c = (isset($_REQUEST["c"])) ? $_REQUEST["c"] : "index";





include "./public_html/npp/controlador/$c.php";
?>



