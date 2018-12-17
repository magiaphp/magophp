<?php 
 /**  
 magia_version: 0.0.8 
 **/ ?>
<h1> 
<span class="<?php echo _menu_icono_segun_pagina($p); ?>"></span> 

<?php _t("Detalles"); ?> 
</h1> 
     <form class="form-horizontal" method="" action=""> 
     <input type="hidden" name="p" value="_permisos"> 
     <input type="hidden" name="c" value="editar"> 
     <input type="hidden" name="_permisos_id" value="<?php echo $_permisos_id; ?>"> 
 <div class="form-group"> 
     <label for="_permisos_grupo" class="col-sm-2 control-label"><?php _t("Grupo"); ?></label> 
     <div class="col-sm-10"> 
       <input type="text" class="form-control" name="_permisos_grupo" id="_permisos_grupo" placeholder="<?php _t("Grupo"); ?>" value="<?php echo $_permisos_grupo; ?>"  disabled > 
     </div> 
   </div> 


 <div class="form-group"> 
     <label for="_permisos_pagina" class="col-sm-2 control-label"><?php _t("Pagina"); ?></label> 
     <div class="col-sm-10"> 
       <input type="text" class="form-control" name="_permisos_pagina" id="_permisos_pagina" placeholder="<?php _t("Pagina"); ?>" value="<?php echo $_permisos_pagina; ?>"  disabled > 
     </div> 
   </div> 


 <div class="form-group"> 
     <label for="_permisos_permiso" class="col-sm-2 control-label"><?php _t("Permiso"); ?></label> 
     <div class="col-sm-10"> 
       <input type="text" class="form-control" name="_permisos_permiso" id="_permisos_permiso" placeholder="<?php _t("Permiso"); ?>" value="<?php echo $_permisos_permiso; ?>"  disabled > 
     </div> 
   </div> 


   <div class="form-group"> 
 <div class="col-sm-offset-2 col-sm-10"> 
       <button type="submit" class="btn btn-primary"><?php _t("Editar"); ?></button> 
     </div> 
   </div>     
 </form> 
 <a href="index.php?p=_permisos&c=txt&_permisos_id=<?php echo $_permisos_id; ?>">Formato texto</a> 
