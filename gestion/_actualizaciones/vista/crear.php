<?php 
 /**  
 magia_version: 0.0.11 
 **/ ?>
<h2>

<span class="glyphicon glyphicon-<?php echo _menu_icono_segun_pagina($p); ?>"></span> 

<?php _t("Nuevo"); ?></h2> 

</h2> 

<form class="form-horizontal" action="index.php" method="post"> 
<input type="hidden" name="p" value="_actualizaciones"> 
<input type="hidden" name="c" value="crear"> 
<input type="hidden" name="a" value="crear"> 

 <div class="form-group"> 
     <label for="_actualizaciones_version" class="col-sm-2 control-label"><?php _t("Version"); ?></label> 
     <div class="col-sm-10"> 
       <input type="text" class="form-control" name="_actualizaciones_version" id="_actualizaciones_version" placeholder="<?php _t("Version"); ?>" value=""   > 
     </div> 
   </div> 


 <div class="form-group"> 
     <label for="_actualizaciones_requiere" class="col-sm-2 control-label"><?php _t("Requiere"); ?></label> 
     <div class="col-sm-10"> 
       <textarea  class="form-control" name="_actualizaciones_requiere" id="_actualizaciones_requiere" placeholder="<?php _t("Requiere"); ?>"></textarea> 
     </div> 
   </div> 


 <div class="form-group"> 
     <label for="_actualizaciones_nombre" class="col-sm-2 control-label"><?php _t("Nombre"); ?></label> 
     <div class="col-sm-10"> 
       <input type="text" class="form-control" name="_actualizaciones_nombre" id="_actualizaciones_nombre" placeholder="<?php _t("Nombre"); ?>" value=""   > 
     </div> 
   </div> 


 <div class="form-group"> 
     <label for="_actualizaciones_descripcion" class="col-sm-2 control-label"><?php _t("Descripcion"); ?></label> 
     <div class="col-sm-10"> 
       <textarea  class="form-control" name="_actualizaciones_descripcion" id="_actualizaciones_descripcion" placeholder="<?php _t("Descripcion"); ?>"></textarea> 
     </div> 
   </div> 


 <div class="form-group"> 
     <label for="_actualizaciones_ejecutar" class="col-sm-2 control-label"><?php _t("Ejecutar"); ?></label> 
     <div class="col-sm-10"> 
       <textarea  class="form-control" name="_actualizaciones_ejecutar" id="_actualizaciones_ejecutar" placeholder="<?php _t("Ejecutar"); ?>"></textarea> 
     </div> 
   </div> 


 <div class="form-group"> 
     <label for="_actualizaciones_estatus" class="col-sm-2 control-label"><?php _t("Estatus"); ?></label> 
     <div class="col-sm-10"> 
     <div class="radio">
        <label>
            <input  type="radio" name="_actualizaciones_estatus" value="1" >
            <?php _t("Activo"); ?> 
        </label>
     </div>
     <div class="radio">
        <label>
            <input  type="radio" name="_actualizaciones_estatus" value="0"  checked >
            <?php _t("Bloqueado"); ?>  
        </label>
     </div>
   </div> 
   </div> 


 <div class="form-group"> 
     <div class="col-sm-offset-2 col-sm-10"> 
       <button type="submit" class="btn btn-primary"><?php _t("Registrar"); ?></button> 
     </div> 
   </div> 
 </form> 
