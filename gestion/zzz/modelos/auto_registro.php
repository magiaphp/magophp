<?php

/**
  magia_version: 0.0.8
 * */
$sql = "INSERT INTO contactos ( 
    
 idioma, tipo_documento  ,  ruc_prefijo  ,  numero_documento  ,  empresa  ,  contacto  ,  
 saludo  ,  direccion  ,  cpostal  ,  ciudad  ,  provincia  ,  pais  ,  tel  ,  fax  ,  
 email  ,  notas  , estatus  
 
) VALUES ( 
 
 :idioma, :tipo_documento  ,  :ruc_prefijo  ,  :numero_documento  ,  :empresa  ,  :contacto  ,  
 :saludo  ,  :direccion  ,  :cpostal  ,  :ciudad  ,  :provincia  ,  :pais  ,  :tel  ,  :fax  ,  
 :email  ,  :notas  ,  :estatus    )";

$stmt = $dbh->prepare($sql);
$stmt->execute(array(
    ":idioma" => "$contactos_idioma",
    ":tipo_documento" => "$contactos_tipo_documento",
    ":ruc_prefijo" => "$contactos_ruc_prefijo",
    ":numero_documento" => "$contactos_numero_documento",
    ":empresa" => "$contactos_empresa",
    ":contacto" => "$contactos_contacto",
    ":saludo" => "$contactos_saludo",
    ":direccion" => "$contactos_direccion",
    ":cpostal" => "$contactos_cpostal",
    ":ciudad" => "$contactos_ciudad",
    ":provincia" => "$contactos_provincia",
    ":pais" => "$contactos_pais",
    ":tel" => "$contactos_tel",
    ":fax" => "$contactos_fax",
    ":email" => "$contactos_email",
    ":notas" => "$contactos_notas",
    ":estatus" => "0" // se agrega codigo 0
        )
);