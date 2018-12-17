<?php 
 /**  
 magia_version: 0.0.8 
 **/ ?>
<h1> 
<span class="glyphicon glyphicon-<?php echo _menu_icono_segun_pagina($p); ?>"></span> 

<?php _t("Detalles"); ?> 
</h1> 
     <form class="form-horizontal" method="" action=""> 
     <input type="hidden" name="p" value="actualizaciones"> 
     <input type="hidden" name="c" value="editar"> 
     <input type="hidden" name="actualizaciones_id" value="<?php echo $actualizaciones_id; ?>"> 
 <div class="form-group"> 
     <label for="actualizaciones_codigo" class="col-sm-2 control-label"><?php _t("Codigo"); ?></label> 
     <div class="col-sm-10"> 
       <input type="text" class="form-control" name="actualizaciones_codigo" id="actualizaciones_codigo" placeholder="<?php _t("Codigo"); ?>" value="<?php echo $actualizaciones_codigo; ?>"  disabled > 
     </div> 
   </div> 


 <div class="form-group"> 
     <label for="actualizaciones_requiere" class="col-sm-2 control-label"><?php _t("Requiere"); ?></label> 
     <div class="col-sm-10"> 
       <input type="text" class="form-control" name="actualizaciones_requiere" id="actualizaciones_requiere" placeholder="<?php _t("Requiere"); ?>" value="<?php echo $actualizaciones_requiere; ?>"  disabled > 
     </div> 
   </div> 


 <div class="form-group"> 
     <label for="actualizaciones_nombre" class="col-sm-2 control-label"><?php _t("Nombre"); ?></label> 
     <div class="col-sm-10"> 
       <input type="text" class="form-control" name="actualizaciones_nombre" id="actualizaciones_nombre" placeholder="<?php _t("Nombre"); ?>" value="<?php echo $actualizaciones_nombre; ?>"  disabled > 
     </div> 
   </div> 


 <div class="form-group"> 
     <label for="actualizaciones_descripcion" class="col-sm-2 control-label"><?php _t("Descripcion"); ?></label> 
     <div class="col-sm-10"> 
       <textarea disabled class="form-control" name="actualizaciones_descripcion" id="actualizaciones_descripcion" placeholder="<?php _t("Descripcion"); ?>"><?php echo $actualizaciones_descripcion; ?></textarea> 
     </div> 
   </div> 


 <div class="form-group"> 
     <label for="actualizaciones_ejecutar" class="col-sm-2 control-label"><?php _t("Ejecutar"); ?></label> 
     <div class="col-sm-10"> 
       <textarea disabled class="form-control" name="actualizaciones_ejecutar" id="actualizaciones_ejecutar" placeholder="<?php _t("Ejecutar"); ?>"><?php echo $actualizaciones_ejecutar; ?></textarea> 
     </div> 
   </div> 


 <div class="form-group"> 
     <label for="actualizaciones_estatus" class="col-sm-2 control-label"><?php _t("Estatus"); ?></label> 
     <div class="col-sm-10"> 
     <div class="radio">
        <label>
            <input disabled type="radio" name="actualizaciones_estatus" value="1" <?php echo "$actualizaciones_estatus_1"; ?>  >
            <?php _t("Activo"); ?> 
        </label>
     </div>
     <div class="radio">
        <label>
            <input disabled type="radio" name="actualizaciones_estatus" value="0"  <?php echo "$actualizaciones_estatus_0"; ?>  >
            <?php _t("Bloqueado"); ?>  
        </label>
     </div>
   </div> 
   </div> 


   <div class="form-group"> 
 <div class="col-sm-offset-2 col-sm-10"> 
       <button type="submit" class="btn btn-primary"><?php _t("Editar"); ?></button> 
     </div> 
   </div>     
 </form> 
 <a href="index.php?p=actualizaciones&c=txt&actualizaciones_id=<?php echo $actualizaciones_id; ?>">Formato texto</a> 
