<?php

/**
  magia_version: 0.0.8
 * */
$datos = [
    "contactos" => ["id" => "$contactos_id",
        "contactos_idioma" => "$contactos_idioma",
        "tipo_documento" => "$contactos_tipo_documento",
        "ruc_prefijo" => "$contactos_ruc_prefijo",
        "numero_documento" => "$contactos_numero_documento",
        "empresa" => "$contactos_empresa",
        "contacto" => "$contactos_contacto",
        "saludo" => "$contactos_saludo",
        "direccion" => "$contactos_direccion",
        "cpostal" => "$contactos_cpostal",
        "ciudad" => "$contactos_ciudad",
        "provincia" => "$contactos_provincia",
        "pais" => "$contactos_pais",
        "tel" => "$contactos_tel",
        "fax" => "$contactos_fax",
        "email" => "$contactos_email",
        "notas" => "$contactos_notas",
        "tipo" => "$contactos_tipo",
        "fecha_registro" => "$contactos_fecha_registro",
        "es_contacto" => "$contactos_es_contacto",
        "estrellas" => "$contactos_estrellas",
        "estatus" => "$contactos_estatus",
    ]
];
$html = str_replace('%contactos_id%', $datos['contactos']['id'], $html);
$html = str_replace('%contactos_idioma%', $datos['contactos']['idioma'], $html);
$html = str_replace('%contactos_tipo_documento%', $datos['contactos']['tipo_documento'], $html);
$html = str_replace('%contactos_ruc_prefijo%', $datos['contactos']['ruc_prefijo'], $html);
$html = str_replace('%contactos_numero_documento%', $datos['contactos']['numero_documento'], $html);
$html = str_replace('%contactos_empresa%', $datos['contactos']['empresa'], $html);
$html = str_replace('%contactos_contacto%', $datos['contactos']['contacto'], $html);
$html = str_replace('%contactos_saludo%', $datos['contactos']['saludo'], $html);
$html = str_replace('%contactos_direccion%', $datos['contactos']['direccion'], $html);
$html = str_replace('%contactos_cpostal%', $datos['contactos']['cpostal'], $html);
$html = str_replace('%contactos_ciudad%', $datos['contactos']['ciudad'], $html);
$html = str_replace('%contactos_provincia%', $datos['contactos']['provincia'], $html);
$html = str_replace('%contactos_pais%', $datos['contactos']['pais'], $html);
$html = str_replace('%contactos_tel%', $datos['contactos']['tel'], $html);
$html = str_replace('%contactos_fax%', $datos['contactos']['fax'], $html);
$html = str_replace('%contactos_email%', $datos['contactos']['email'], $html);
$html = str_replace('%contactos_notas%', $datos['contactos']['notas'], $html);
$html = str_replace('%contactos_tipo%', $datos['contactos']['tipo'], $html);
$html = str_replace('%contactos_fecha_registro%', $datos['contactos']['fecha_registro'], $html);
$html = str_replace('%contactos_es_contacto%', $datos['contactos']['es_contacto'], $html);
$html = str_replace('%contactos_estrellas%', $datos['contactos']['estrellas'], $html);
$html = str_replace('%contactos_estatus%', $datos['contactos']['estatus'], $html);
