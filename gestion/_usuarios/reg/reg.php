<?php 
 /**  
 magia_version: 0.0.8 
 **/ 

  $_usuarios_id = $_usuarios['id']; 
  $_usuarios_grupo = $_usuarios['grupo']; 
  $_usuarios_usuario = $_usuarios['usuario']; 
  $_usuarios_clave = $_usuarios['clave']; 
  $_usuarios_estatus = $_usuarios['estatus']; 
 $_usuarios_estatus_0 = "";   $_usuarios_estatus_1 = "";      if($_usuarios_estatus==0){
      $_usuarios_estatus_0 = " checked "; 
      $_usuarios_estatus_1 = ""; 
  }else {
      $_usuarios_estatus_0 = ""; 
      $_usuarios_estatus_1 = "checked";       
  }  
