<?php

/**
  magia_version: 0.0.11
 * */
$datos = [
    "_actualizaciones" => ["id" => "$_actualizaciones_id",
        "version" => "$_actualizaciones_version",
        "requiere" => "$_actualizaciones_requiere",
        "nombre" => "$_actualizaciones_nombre",
        "descripcion" => "$_actualizaciones_descripcion",
        "ejecutar" => "$_actualizaciones_ejecutar",
        "estatus" => "$_actualizaciones_estatus",
    ]
];
$html = str_replace('%_actualizaciones_id%', $datos['_actualizaciones']['id'], $html);
$html = str_replace('%_actualizaciones_version%', $datos['_actualizaciones']['version'], $html);
$html = str_replace('%_actualizaciones_requiere%', $datos['_actualizaciones']['requiere'], $html);
$html = str_replace('%_actualizaciones_nombre%', $datos['_actualizaciones']['nombre'], $html);
$html = str_replace('%_actualizaciones_descripcion%', $datos['_actualizaciones']['descripcion'], $html);
$html = str_replace('%_actualizaciones_ejecutar%', $datos['_actualizaciones']['ejecutar'], $html);
$html = str_replace('%_actualizaciones_estatus%', $datos['_actualizaciones']['estatus'], $html);
