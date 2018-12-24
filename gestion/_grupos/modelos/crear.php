<?php

$sql = "INSERT INTO _grupos ( grupo  ) VALUES (  :grupo    )";

$stmt = $dbh->prepare($sql);
$stmt->execute(array(
    ":grupo" => "$_grupos_grupo")
);


