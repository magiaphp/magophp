<?php 
 /**  
 magia_version: 0.0.8 
 **/ 

  $actualizaciones_id = $actualizaciones['id']; 
  $actualizaciones_codigo = $actualizaciones['codigo']; 
  $actualizaciones_requiere = $actualizaciones['requiere']; 
  $actualizaciones_nombre = $actualizaciones['nombre']; 
  $actualizaciones_descripcion = $actualizaciones['descripcion']; 
  $actualizaciones_ejecutar = $actualizaciones['ejecutar']; 
  $actualizaciones_estatus = $actualizaciones['estatus']; 
 $actualizaciones_estatus_0 = "";   $actualizaciones_estatus_1 = "";      if($actualizaciones_estatus==0){
      $actualizaciones_estatus_0 = " checked "; 
      $actualizaciones_estatus_1 = ""; 
  }else {
      $actualizaciones_estatus_0 = ""; 
      $actualizaciones_estatus_1 = "checked";       
  }  
