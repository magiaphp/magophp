<?php 
 /**  
 magia_version: 0.0.8 
 **/ ?>
<h2>

<span class="<?php echo _menu_icono_segun_pagina($p); ?>"></span> 

<?php _t("Nuevo"); ?></h2> 

</h2> 

<form class="form-horizontal" action="index.php" method="post"> 
<input type="hidden" name="p" value="_menu"> 
<input type="hidden" name="c" value="crear"> 
<input type="hidden" name="a" value="crear"> 

 <div class="form-group"> 
     <label for="_menu_ubicacion" class="col-sm-2 control-label"><?php _t("Ubicación"); ?></label> 
     <div class="col-sm-10"> 
       <input 
           type="text" 
           class="form-control" 
           name="_menu_ubicacion" 
           id="_menu_ubicacion" 
           placeholder="top, sidebar, etc" value=""   > 
     </div> 
   </div> 


 <div class="form-group"> 
     <label for="_menu_padre" class="col-sm-2 control-label"><?php _t("Padre"); ?></label> 
     <div class="col-sm-10"> 
       <input type="text" class="form-control" name="_menu_padre" id="_menu_padre" placeholder="<?php _t("Padre"); ?>" value=""   > 
     </div> 
   </div> 


 <div class="form-group"> 
     <label for="_menu_label" class="col-sm-2 control-label"><?php _t("Label"); ?></label> 
     <div class="col-sm-10"> 
       <input type="text" class="form-control" name="_menu_label" id="_menu_label" placeholder="<?php _t("Label"); ?>" value=""   > 
     </div> 
   </div> 


 <div class="form-group"> 
     <label for="_menu_url" class="col-sm-2 control-label"><?php _t("Url"); ?></label> 
     <div class="col-sm-10"> 
       <input 
           type="text" 
           class="form-control" 
           name="_menu_url" 
           id="_menu_url" 
           placeholder="?p=pagina&c=index" value=""   > 
     </div> 
   </div> 


 <div class="form-group"> 
     <label for="_menu_icono" class="col-sm-2 control-label"><?php _t("Icono"); ?></label> 
     <div class="col-sm-10"> 
         <input 
           type="text" 
           class="form-control" 
           name="_menu_icono" 
           id="_menu_icono" 
           placeholder="<?php _t("folder-open"); ?>" value=""   > 
       <a href="http://getbootstrap.com/components/#glyphicons" target="new">http://getbootstrap.com/components/#glyphicons</a>
     </div> 
   </div> 


 <div class="form-group"> 
     <label for="_menu_orden" class="col-sm-2 control-label"><?php _t("Orden"); ?></label> 
     <div class="col-sm-10"> 
       <input 
           type="text" 
           class="form-control" 
           name="_menu_orden" 
           id="_menu_orden" 
           placeholder="0" 
           value=""   > 
     </div> 
   </div> 


 <div class="form-group"> 
     <div class="col-sm-offset-2 col-sm-10"> 
       <button type="submit" class="btn btn-primary"><?php _t("Registrar"); ?></button> 
     </div> 
   </div> 
 </form> 
