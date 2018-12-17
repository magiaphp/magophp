<?php

/**
  magia_version: 0.0.8
 * */
$contactos_id = $contactos['id'];
$contactos_idioma = $contactos['idioma'];
$contactos_tipo_documento = $contactos['tipo_documento'];
$contactos_ruc_prefijo = $contactos['ruc_prefijo'];
$contactos_numero_documento = $contactos['numero_documento'];
$contactos_empresa = $contactos['empresa'];
$contactos_contacto = $contactos['contacto'];
$contactos_saludo = $contactos['saludo'];
$contactos_direccion = $contactos['direccion'];
$contactos_cpostal = $contactos['cpostal'];
$contactos_ciudad = $contactos['ciudad'];
$contactos_provincia = $contactos['provincia'];
$contactos_pais = $contactos['pais'];
$contactos_tel = $contactos['tel'];
$contactos_fax = $contactos['fax'];
$contactos_email = $contactos['email'];
$contactos_notas = $contactos['notas'];
$contactos_tipo = $contactos['tipo'];
$contactos_fecha_registro = $contactos['fecha_registro'];
$contactos_es_contacto = $contactos['es_contacto'];
$contactos_estrellas = $contactos['estrellas'];
$contactos_estatus = $contactos['estatus'];

$contactos_estatus_0 = "";
$contactos_estatus_1 = "";

if ($contactos_estatus == 0) {
    $contactos_estatus_0 = " checked ";
    $contactos_estatus_1 = "";
} else {
    $contactos_estatus_0 = "";
    $contactos_estatus_1 = "checked";
}  
