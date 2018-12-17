<?php 
 /**  
 magia_version: 0.0.8 
 **/ 

  $cambio_claves_id = $cambio_claves['id']; 
  $cambio_claves_usuario = $cambio_claves['usuario']; 
  $cambio_claves_codigo = $cambio_claves['codigo']; 
  $cambio_claves_fecha_solicitud = $cambio_claves['fecha_solicitud']; 
  $cambio_claves_codigo_usado = $cambio_claves['codigo_usado']; 
 $cambio_claves_codigo_usado_0 = "";   $cambio_claves_codigo_usado_1 = "";      if($cambio_claves_codigo_usado==0){
      $cambio_claves_codigo_usado_0 = " checked "; 
      $cambio_claves_codigo_usado_1 = ""; 
  }else {
      $cambio_claves_codigo_usado_0 = ""; 
      $cambio_claves_codigo_usado_1 = "checked";       
  }  
