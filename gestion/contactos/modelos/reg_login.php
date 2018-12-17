<?php

/**
  magia_version: 0.0.8
 * */
$sql = "INSERT INTO _usuarios (     
 grupo  ,  usuario  ,  clave  ,  estatus    
) VALUES (  
 :grupo  ,  :usuario  ,  :clave  ,  :estatus  )";




$stmt = $dbh->prepare($sql);
$stmt->execute(array(
    ":grupo" => "$contactos_grupo",
    ":usuario" => "$contactos_email",
    ":clave" => $contactos_clave,
    ":estatus" => "$contactos_estatus"
   )
);
