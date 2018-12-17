<?php 
 /**  
 magia_version: 0.0.8 
 **/ ?>
<h2>

<span class="<?php echo _menu_icono_segun_pagina($p); ?>"></span> 

<?php _t("Editar _traducciones"); ?></h2> 

</h2> 

     <form class="form-horizontal" method="post" action="index.php"> 
     <input type="hidden" name="p" value="_traducciones"> 
     <input type="hidden" name="c" value="editar"> 
     <input type="hidden" name="a" value="editar"> 
     <input type="hidden" name="_traducciones_id" value="<?php echo $_traducciones_id; ?>"> 

 <div class="form-group"> 
     <label for="_menu" class="col-sm-2 control-label"><?php _t("Frase"); ?></label> 
     <div class="col-sm-10"> 
        <select class="form-control" name="_menu" <?php echo $_traducciones_frase; ?>>
        <?php _contenido_add($_traducciones_frase); ?>
        </select>
     </div> 
   </div> 


 <div class="form-group"> 
     <label for="_idiomas" class="col-sm-2 control-label"><?php _t("Idioma"); ?></label> 
     <div class="col-sm-10"> 
        <select class="form-control" name="_idiomas" <?php echo $_traducciones_idioma; ?>>
        <?php _idiomas_add($_idiomas); ?>
        </select>
     </div> 
   </div> 


 <div class="form-group"> 
     <label for="_traducciones_traduccion" class="col-sm-2 control-label"><?php _t("Traduccion"); ?></label> 
     <div class="col-sm-10"> 
       <input type="text" class="form-control" name="_traducciones_traduccion" id="_traducciones_traduccion" placeholder="<?php _t("Traduccion"); ?>" value="<?php echo $_traducciones_traduccion; ?>"   > 
     </div> 
   </div> 


   <div class="form-group"> 
 <div class="col-sm-offset-2 col-sm-10"> 
       <button type="submit" class="btn btn-primary"><?php _t("Editar"); ?></button> 
     </div> 
   </div>     
 </form> 
