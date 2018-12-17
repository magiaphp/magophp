<?php 
 /**  
 magia_version: 0.0.8 
 **/ ?>
<h2>

<span class="glyphicon glyphicon-<?php echo _menu_icono_segun_pagina($p); ?>"></span> 

<?php _t("Nuevo"); ?></h2> 

</h2> 

<form class="form-horizontal" action="index.php" method="post"> 
<input type="hidden" name="p" value="actualizaciones"> 
<input type="hidden" name="c" value="crear"> 
<input type="hidden" name="a" value="crear"> 

 <div class="form-group"> 
     <label for="actualizaciones_codigo" class="col-sm-2 control-label"><?php _t("Codigo"); ?></label> 
     <div class="col-sm-10"> 
       <input type="text" class="form-control" name="actualizaciones_codigo" id="actualizaciones_codigo" placeholder="<?php _t("Codigo"); ?>" value=""   > 
     </div> 
   </div> 


 <div class="form-group"> 
     <label for="actualizaciones_requiere" class="col-sm-2 control-label"><?php _t("Requiere"); ?></label> 
     <div class="col-sm-10"> 
       <input type="text" class="form-control" name="actualizaciones_requiere" id="actualizaciones_requiere" placeholder="<?php _t("Requiere"); ?>" value=""   > 
     </div> 
   </div> 


 <div class="form-group"> 
     <label for="actualizaciones_nombre" class="col-sm-2 control-label"><?php _t("Nombre"); ?></label> 
     <div class="col-sm-10"> 
       <input type="text" class="form-control" name="actualizaciones_nombre" id="actualizaciones_nombre" placeholder="<?php _t("Nombre"); ?>" value=""   > 
     </div> 
   </div> 


 <div class="form-group"> 
     <label for="actualizaciones_descripcion" class="col-sm-2 control-label"><?php _t("Descripcion"); ?></label> 
     <div class="col-sm-10"> 
       <textarea  class="form-control" name="actualizaciones_descripcion" id="actualizaciones_descripcion" placeholder="<?php _t("Descripcion"); ?>"></textarea> 
     </div> 
   </div> 


 <div class="form-group"> 
     <label for="actualizaciones_ejecutar" class="col-sm-2 control-label"><?php _t("Ejecutar"); ?></label> 
     <div class="col-sm-10"> 
       <textarea  class="form-control" name="actualizaciones_ejecutar" id="actualizaciones_ejecutar" placeholder="<?php _t("Ejecutar"); ?>"></textarea> 
     </div> 
   </div> 


 <div class="form-group"> 
     <label for="actualizaciones_estatus" class="col-sm-2 control-label"><?php _t("Estatus"); ?></label> 
     <div class="col-sm-10"> 
     <div class="radio">
        <label>
            <input  type="radio" name="actualizaciones_estatus" value="1" >
            <?php _t("Activo"); ?> 
        </label>
     </div>
     <div class="radio">
        <label>
            <input  type="radio" name="actualizaciones_estatus" value="0"  checked >
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
