<?php

/**
  magia_version: 0.0.8
 * */
//$contactos_id = mysql_real_escape_string(trim($_GET['contactos_id'])); 
$contactos_idioma = (isset($_GET['contactos_idioma'])) ? mysql_real_escape_string(trim($_GET['contactos_idioma'])):'es_ES';
$contactos_tipo_documento = (isset($_GET['contactos_tipo_documento'])) ? mysql_real_escape_string(trim($_GET['contactos_tipo_documento'])):null;
$contactos_ruc_prefijo = (isset($_GET['contactos_ruc_prefijo'])) ? mysql_real_escape_string(trim($_GET['contactos_ruc_prefijo'])):null;
$contactos_numero_documento = (isset($_GET['contactos_numero_documento'])) ? mysql_real_escape_string(trim($_GET['contactos_numero_documento'])):null;
$contactos_empresa = (isset($_GET['contactos_empresa'])) ? mysql_real_escape_string(trim($_GET['contactos_empresa'])):"Company";
$contactos_contacto = (isset($_GET['contactos_contacto'])) ? mysql_real_escape_string(trim($_GET['contactos_contacto'])):null;
$contactos_saludo = (isset($_GET['contactos_saludo'])) ? mysql_real_escape_string(trim($_GET['contactos_saludo'])):null;
$contactos_direccion = (isset($_GET['contactos_direccion'])) ? mysql_real_escape_string(trim($_GET['contactos_direccion'])):null;
$contactos_cpostal = (isset($_GET['contactos_cpostal'])) ? mysql_real_escape_string(trim($_GET['contactos_cpostal'])):null;
$contactos_ciudad = (isset($_GET['contactos_ciudad'])) ? mysql_real_escape_string(trim($_GET['contactos_ciudad'])):null;
$contactos_provincia = (isset($_GET['contactos_provincia'])) ? mysql_real_escape_string(trim($_GET['contactos_provincia'])):null;
$contactos_pais = (isset($_GET['contactos_pais'])) ? mysql_real_escape_string(trim($_GET['contactos_pais'])):null;
$contactos_tel = (isset($_GET['contactos_tel'])) ? mysql_real_escape_string(trim($_GET['contactos_tel'])):null;
$contactos_fax = (isset($_GET['contactos_fax'])) ? mysql_real_escape_string(trim($_GET['contactos_fax'])):null;
$contactos_email = (isset($_GET['contactos_email'])) ? mysql_real_escape_string(trim($_GET['contactos_email'])):null;
$contactos_notas = (isset($_GET['contactos_notas'])) ? mysql_real_escape_string(trim($_GET['contactos_notas'])):null;
//$fecha_registro  = (isset($_GET['fecha_registro '])) ? mysql_real_escape_string(trim($_GET['fecha_registro '])):null;
$contactos_tipo = (isset($_GET['contactos_tipo'])) ? mysql_real_escape_string(trim($_GET['contactos_tipo'])):null;
$contactos_es_contacto = (isset($_GET['contactos_es_contacto'])) ? mysql_real_escape_string(trim($_GET['contactos_es_contacto'])):null;
$contactos_estrellas = (isset($_GET['contactos_estrellas'])) ? mysql_real_escape_string(trim($_GET['contactos_estrellas'])):null;
$contactos_estatus = (isset($_GET['contactos_estatus'])) ? mysql_real_escape_string(trim($_GET['contactos_estatus'])):null;

