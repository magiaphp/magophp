<?php 
 /**  
 magia_version: 0.0.8 
 **/ ?>
<h2>

<span class="<?php echo _menu_icono_segun_pagina($p); ?>"></span> 

<?php _t("Nuevo _contenido"); ?></h2> 
</h2> 

<form class="form-horizontal" action="index.php" method="post"> 
<input type="hidden" name="p" value="_contenido"> 
<input type="hidden" name="c" value="crear"> 
<input type="hidden" name="a" value="crear"> 

 <div class="form-group"> 
     <label for="_contenido_frase" class="col-sm-2 control-label"><?php _t("Frase"); ?></label> 
     <div class="col-sm-10"> 
       <input type="text" class="form-control" name="_contenido_frase" id="_contenido_frase" placeholder="<?php _t("Frase"); ?>" value=""   > 
     </div> 
   </div> 


 <div class="form-group"> 
     <label for="_contenido_contexto" class="col-sm-2 control-label"><?php _t("Contexto"); ?></label> 
     <div class="col-sm-10"> 
       <input type="text" class="form-control" name="_contenido_contexto" id="_contenido_contexto" placeholder="<?php _t("Contexto"); ?>" value=""   > 
     </div> 
   </div> 


 <div class="form-group"> 
     <div class="col-sm-offset-2 col-sm-10"> 
       <button type="submit" class="btn btn-primary"><?php _t("Registrar"); ?></button> 
     </div> 
   </div> 
 </form> 
