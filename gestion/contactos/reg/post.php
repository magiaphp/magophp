<?php

/**
  magia_version: 0.0.8
 * */
//$contactos_id = mysql_real_escape_string(trim($_POST['contactos_id'])); 
$contactos_idioma = (isset($_POST['contactos_idioma'])) ? mysql_real_escape_string(trim($_POST['contactos_idioma'])):'es_ES';
$contactos_tipo_documento = (isset($_POST['contactos_tipo_documento'])) ? mysql_real_escape_string(trim($_POST['contactos_tipo_documento'])):null;
$contactos_ruc_prefijo = (isset($_POST['contactos_ruc_prefijo'])) ? mysql_real_escape_string(trim($_POST['contactos_ruc_prefijo'])):null;
$contactos_numero_documento = (isset($_POST['contactos_numero_documento'])) ? mysql_real_escape_string(trim($_POST['contactos_numero_documento'])):null;
$contactos_empresa = (isset($_POST['contactos_empresa'])) ? mysql_real_escape_string(trim($_POST['contactos_empresa'])):"Company";
$contactos_contacto = (isset($_POST['contactos_contacto'])) ? mysql_real_escape_string(trim($_POST['contactos_contacto'])):null;
$contactos_saludo = (isset($_POST['contactos_saludo'])) ? mysql_real_escape_string(trim($_POST['contactos_saludo'])):null;
$contactos_direccion = (isset($_POST['contactos_direccion'])) ? mysql_real_escape_string(trim($_POST['contactos_direccion'])):null;
$contactos_cpostal = (isset($_POST['contactos_cpostal'])) ? mysql_real_escape_string(trim($_POST['contactos_cpostal'])):null;
$contactos_ciudad = (isset($_POST['contactos_ciudad'])) ? mysql_real_escape_string(trim($_POST['contactos_ciudad'])):null;
$contactos_provincia = (isset($_POST['contactos_provincia'])) ? mysql_real_escape_string(trim($_POST['contactos_provincia'])):null;
$contactos_pais = (isset($_POST['contactos_pais'])) ? mysql_real_escape_string(trim($_POST['contactos_pais'])):null;
$contactos_tel = (isset($_POST['contactos_tel'])) ? mysql_real_escape_string(trim($_POST['contactos_tel'])):null;
$contactos_fax = (isset($_POST['contactos_fax'])) ? mysql_real_escape_string(trim($_POST['contactos_fax'])):null;
$contactos_email = (isset($_POST['contactos_email'])) ? mysql_real_escape_string(trim($_POST['contactos_email'])):null;
$contactos_notas = (isset($_POST['contactos_notas'])) ? mysql_real_escape_string(trim($_POST['contactos_notas'])):null;
//$fecha_registro  = (isset($_POST['fecha_registro '])) ? mysql_real_escape_string(trim($_POST['fecha_registro '])):null;
$contactos_tipo = (isset($_POST['contactos_tipo'])) ? mysql_real_escape_string(trim($_POST['contactos_tipo'])):null;
$contactos_es_contacto = (isset($_POST['contactos_es_contacto'])) ? mysql_real_escape_string(trim($_POST['contactos_es_contacto'])):null;
$contactos_estrellas = (isset($_POST['contactos_estrellas'])) ? mysql_real_escape_string(trim($_POST['contactos_estrellas'])):null;
$contactos_estatus = (isset($_POST['contactos_estatus'])) ? mysql_real_escape_string(trim($_POST['contactos_estatus'])):0;

