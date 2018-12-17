<?php 
 /**  
 magia_version: 0.0.8 
 **/ ?>
<h2>

<span class="glyphicon glyphicon-search"></span>

<?php _t("Buscar"); ?> 

</h2> 

<form class="" action="index.php" method="get"> 
<input type="hidden" name="p" value="_permisos"> 
<input type="hidden" name="c" value="buscar"> 
     <div class="form-group"> 
     <label for="_permisos_grupo" class="col-sm-2 control-label"><?php _t("Grupo");?></label> 
       <input type="text" class="form-control" name="_permisos_grupo" id="_permisos_grupo" placeholder="<?php _t("Grupo"); ?> "> 
   </div> 


     <div class="form-group"> 
     <label for="_permisos_pagina" class="col-sm-2 control-label"><?php _t("Pagina");?></label> 
       <input type="text" class="form-control" name="_permisos_pagina" id="_permisos_pagina" placeholder="<?php _t("Pagina"); ?> "> 
   </div> 


     <div class="form-group"> 
     <label for="_permisos_permiso" class="col-sm-2 control-label"><?php _t("Permiso");?></label> 
       <input type="text" class="form-control" name="_permisos_permiso" id="_permisos_permiso" placeholder="<?php _t("Permiso"); ?> "> 
   </div> 


       <button type="submit" class="btn btn-primary"><?php _t("Buscar"); ?></button> 
 </form> 
