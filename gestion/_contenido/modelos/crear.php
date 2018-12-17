<?php

$sql = "INSERT INTO _contenido ( 
 frase  ,  contexto  ) VALUES ( 
 :frase  ,  :contexto    )";
$stmt = $dbh->prepare($sql);
$stmt->execute(array(
    ":frase" => "$_contenido_frase",
    ":contexto" => "$_contenido_contexto"
        )
);

