<?php 
 /**  
 magia_version: 0.0.11 
 **/ 

  $_actualizaciones_id = $_actualizaciones['id']; 
  $_actualizaciones_version = $_actualizaciones['version']; 
  $_actualizaciones_requiere = $_actualizaciones['requiere']; 
  $_actualizaciones_nombre = $_actualizaciones['nombre']; 
  $_actualizaciones_descripcion = $_actualizaciones['descripcion']; 
  $_actualizaciones_ejecutar = $_actualizaciones['ejecutar']; 
  $_actualizaciones_estatus = $_actualizaciones['estatus']; 
 $_actualizaciones_estatus_0 = "";   $_actualizaciones_estatus_1 = "";      if($_actualizaciones_estatus==0){
      $_actualizaciones_estatus_0 = " checked "; 
      $_actualizaciones_estatus_1 = ""; 
  }else {
      $_actualizaciones_estatus_0 = ""; 
      $_actualizaciones_estatus_1 = "checked";       
  }  
