<?php 
 /**  
 magia_version: 0.0.8 
 **/ ?>
<h2>

<span class="glyphicon glyphicon-<?php echo _menu_icono_segun_pagina($p); ?>"></span> 

<?php _t("Nuevo"); ?></h2> 

</h2> 

<form class="form-horizontal" action="index.php" method="post"> 
<input type="hidden" name="p" value="_opciones"> 
<input type="hidden" name="c" value="crear"> 
<input type="hidden" name="a" value="crear"> 

 <div class="form-group"> 
     <label for="_opciones_opcion" class="col-sm-2 control-label"><?php _t("Opcion"); ?></label> 
     <div class="col-sm-10"> 
       <input type="text" class="form-control" name="_opciones_opcion" id="_opciones_opcion" placeholder="<?php _t("Opcion"); ?>" value=""   > 
     </div> 
   </div> 


 <div class="form-group"> 
     <label for="_opciones_valor" class="col-sm-2 control-label"><?php _t("Valor"); ?></label> 
     <div class="col-sm-10"> 
       <textarea  class="form-control" name="_opciones_valor" id="_opciones_valor" placeholder="<?php _t("Valor"); ?>"></textarea> 
     </div> 
   </div> 


 <div class="form-group"> 
     <label for="_opciones_grupo" class="col-sm-2 control-label"><?php _t("Grupo"); ?></label> 
     <div class="col-sm-10"> 
       <input type="text" class="form-control" name="_opciones_grupo" id="_opciones_grupo" placeholder="<?php _t("Grupo"); ?>" value=""   > 
     </div> 
   </div> 


 <div class="form-group"> 
     <div class="col-sm-offset-2 col-sm-10"> 
       <button type="submit" class="btn btn-primary"><?php _t("Registrar"); ?></button> 
     </div> 
   </div> 
 </form> 
