<?php 
 /**  
 magia_version: 0.0.8 
 **/ ?>
<h1> 
<span class="<?php echo _menu_icono_segun_pagina($p); ?>"></span> 

<?php _t("Detalles"); ?> 
</h1> 
     <form class="form-horizontal" method="" action=""> 
     <input type="hidden" name="p" value="_menu"> 
     <input type="hidden" name="c" value="editar"> 
     <input type="hidden" name="_menu_id" value="<?php echo $_menu_id; ?>"> 
 <div class="form-group"> 
     <label for="_menu_ubicacion" class="col-sm-2 control-label"><?php _t("Ubicacion"); ?></label> 
     <div class="col-sm-10"> 
       <input type="text" class="form-control" name="_menu_ubicacion" id="_menu_ubicacion" placeholder="<?php _t("Ubicacion"); ?>" value="<?php echo $_menu_ubicacion; ?>"  disabled > 
     </div> 
   </div> 


 <div class="form-group"> 
     <label for="_menu_padre" class="col-sm-2 control-label"><?php _t("Padre"); ?></label> 
     <div class="col-sm-10"> 
       <input type="text" class="form-control" name="_menu_padre" id="_menu_padre" placeholder="<?php _t("Padre"); ?>" value="<?php echo $_menu_padre; ?>"  disabled > 
     </div> 
   </div> 


 <div class="form-group"> 
     <label for="_menu_label" class="col-sm-2 control-label"><?php _t("Label"); ?></label> 
     <div class="col-sm-10"> 
       <input type="text" class="form-control" name="_menu_label" id="_menu_label" placeholder="<?php _t("Label"); ?>" value="<?php echo $_menu_label; ?>"  disabled > 
     </div> 
   </div> 


 <div class="form-group"> 
     <label for="_menu_url" class="col-sm-2 control-label"><?php _t("Url"); ?></label> 
     <div class="col-sm-10"> 
       <input type="text" class="form-control" name="_menu_url" id="_menu_url" placeholder="<?php _t("Url"); ?>" value="<?php echo $_menu_url; ?>"  disabled > 
     </div> 
   </div> 


 <div class="form-group"> 
     <label for="_menu_icono" class="col-sm-2 control-label"><?php _t("Icono"); ?></label> 
     <div class="col-sm-10"> 
       <input type="text" class="form-control" name="_menu_icono" id="_menu_icono" placeholder="<?php _t("Icono"); ?>" value="<?php echo $_menu_icono; ?>"  disabled > 
     </div> 
   </div> 


 <div class="form-group"> 
     <label for="_menu_orden" class="col-sm-2 control-label"><?php _t("Orden"); ?></label> 
     <div class="col-sm-10"> 
       <input type="text" class="form-control" name="_menu_orden" id="_menu_orden" placeholder="<?php _t("Orden"); ?>" value="<?php echo $_menu_orden; ?>"  disabled > 
     </div> 
   </div> 


   <div class="form-group"> 
 <div class="col-sm-offset-2 col-sm-10"> 
       <button type="submit" class="btn btn-primary"><?php _t("Editar"); ?></button> 
     </div> 
   </div>     
 </form> 
 <a href="index.php?p=_menu&c=txt&_menu_id=<?php echo $_menu_id; ?>">Formato texto</a> 
