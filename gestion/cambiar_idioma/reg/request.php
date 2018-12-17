<?php 
 /**  
 magia_version: 0.0.8 
 **/
  
  $contactos_id = mysql_real_escape_string($_REQUEST['contactos_id']); 
  $contactos_idioma = mysql_real_escape_string($_REQUEST['contactos_idioma']); 
  $contactos_tipo_documento = mysql_real_escape_string($_REQUEST['contactos_tipo_documento']); 
  $contactos_ruc_prefijo = mysql_real_escape_string($_REQUEST['contactos_ruc_prefijo']); 
  $contactos_numero_documento = mysql_real_escape_string($_REQUEST['contactos_numero_documento']); 
  $contactos_empresa = mysql_real_escape_string($_REQUEST['contactos_empresa']); 
  $contactos_contacto = mysql_real_escape_string($_REQUEST['contactos_contacto']); 
  $contactos_saludo = mysql_real_escape_string($_REQUEST['contactos_saludo']); 
  $contactos_direccion = mysql_real_escape_string($_REQUEST['contactos_direccion']); 
  $contactos_cpostal = mysql_real_escape_string($_REQUEST['contactos_cpostal']); 
  $contactos_ciudad = mysql_real_escape_string($_REQUEST['contactos_ciudad']); 
  $contactos_provincia = mysql_real_escape_string($_REQUEST['contactos_provincia']); 
  $contactos_pais = mysql_real_escape_string($_REQUEST['contactos_pais']); 
  $contactos_tel = mysql_real_escape_string($_REQUEST['contactos_tel']); 
  $contactos_fax = mysql_real_escape_string($_REQUEST['contactos_fax']); 
  $contactos_email = mysql_real_escape_string($_REQUEST['contactos_email']); 
  $contactos_notas = mysql_real_escape_string($_REQUEST['contactos_notas']); 
  $contactos_tipo = mysql_real_escape_string($_REQUEST['contactos_tipo']); 
  $contactos_fecha_registro = mysql_real_escape_string($_REQUEST['contactos_fecha_registro']); 
  $contactos_es_contacto = mysql_real_escape_string($_REQUEST['contactos_es_contacto']); 
  $contactos_estrellas = mysql_real_escape_string($_REQUEST['contactos_estrellas']); 
  $contactos_estatus = mysql_real_escape_string($_REQUEST['contactos_estatus']); 
