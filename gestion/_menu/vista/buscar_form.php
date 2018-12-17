<?php 
 /**  
 magia_version: 0.0.8 
 **/ ?>
<h2>

<span class="glyphicon glyphicon-search"></span>

<?php _t("Buscar"); ?> 

</h2> 

<form class="" action="index.php" method="get"> 
<input type="hidden" name="p" value="_menu"> 
<input type="hidden" name="c" value="buscar"> 
     <div class="form-group"> 
     <label for="_menu_ubicacion" class="col-sm-2 control-label"><?php _t("Ubicacion");?></label> 
       <input type="text" class="form-control" name="_menu_ubicacion" id="_menu_ubicacion" placeholder="<?php _t("Ubicacion"); ?> "> 
   </div> 


     <div class="form-group"> 
     <label for="_menu_padre" class="col-sm-2 control-label"><?php _t("Padre");?></label> 
       <input type="text" class="form-control" name="_menu_padre" id="_menu_padre" placeholder="<?php _t("Padre"); ?> "> 
   </div> 


     <div class="form-group"> 
     <label for="_menu_label" class="col-sm-2 control-label"><?php _t("Label");?></label> 
       <input type="text" class="form-control" name="_menu_label" id="_menu_label" placeholder="<?php _t("Label"); ?> "> 
   </div> 


     <div class="form-group"> 
     <label for="_menu_url" class="col-sm-2 control-label"><?php _t("Url");?></label> 
       <input type="text" class="form-control" name="_menu_url" id="_menu_url" placeholder="<?php _t("Url"); ?> "> 
   </div> 


     <div class="form-group"> 
     <label for="_menu_icono" class="col-sm-2 control-label"><?php _t("Icono");?></label> 
       <input type="text" class="form-control" name="_menu_icono" id="_menu_icono" placeholder="<?php _t("Icono"); ?> "> 
   </div> 


     <div class="form-group"> 
     <label for="_menu_orden" class="col-sm-2 control-label"><?php _t("Orden");?></label> 
       <input type="text" class="form-control" name="_menu_orden" id="_menu_orden" placeholder="<?php _t("Orden"); ?> "> 
   </div> 


       <button type="submit" class="btn btn-primary"><?php _t("Buscar"); ?></button> 
 </form> 
