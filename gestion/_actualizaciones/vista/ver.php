<?php 
 /**  
 magia_version: 0.0.11 
 **/ ?>
<h1> 
<span class="glyphicon glyphicon-<?php echo _menu_icono_segun_pagina($p); ?>"></span> 

<?php _t("Detalles"); ?> 
</h1> 
     <form class="form-horizontal" method="" action=""> 
     <input type="hidden" name="p" value="_actualizaciones"> 
     <input type="hidden" name="c" value="editar"> 
     <input type="hidden" name="_actualizaciones_id" value="<?php echo $_actualizaciones_id; ?>"> 
 <div class="form-group"> 
     <label for="_actualizaciones_version" class="col-sm-2 control-label"><?php _t("Version"); ?></label> 
     <div class="col-sm-10"> 
       <input type="text" class="form-control" name="_actualizaciones_version" id="_actualizaciones_version" placeholder="<?php _t("Version"); ?>" value="<?php echo $_actualizaciones_version; ?>"  disabled > 
     </div> 
   </div> 


 <div class="form-group"> 
     <label for="_actualizaciones_requiere" class="col-sm-2 control-label"><?php _t("Requiere"); ?></label> 
     <div class="col-sm-10"> 
       <textarea disabled class="form-control" name="_actualizaciones_requiere" id="_actualizaciones_requiere" placeholder="<?php _t("Requiere"); ?>"><?php echo $_actualizaciones_requiere; ?></textarea> 
     </div> 
   </div> 


 <div class="form-group"> 
     <label for="_actualizaciones_nombre" class="col-sm-2 control-label"><?php _t("Nombre"); ?></label> 
     <div class="col-sm-10"> 
       <input type="text" class="form-control" name="_actualizaciones_nombre" id="_actualizaciones_nombre" placeholder="<?php _t("Nombre"); ?>" value="<?php echo $_actualizaciones_nombre; ?>"  disabled > 
     </div> 
   </div> 


 <div class="form-group"> 
     <label for="_actualizaciones_descripcion" class="col-sm-2 control-label"><?php _t("Descripcion"); ?></label> 
     <div class="col-sm-10"> 
       <textarea disabled class="form-control" name="_actualizaciones_descripcion" id="_actualizaciones_descripcion" placeholder="<?php _t("Descripcion"); ?>"><?php echo $_actualizaciones_descripcion; ?></textarea> 
     </div> 
   </div> 


 <div class="form-group"> 
     <label for="_actualizaciones_ejecutar" class="col-sm-2 control-label"><?php _t("Ejecutar"); ?></label> 
     <div class="col-sm-10"> 
       <textarea disabled class="form-control" name="_actualizaciones_ejecutar" id="_actualizaciones_ejecutar" placeholder="<?php _t("Ejecutar"); ?>"><?php echo $_actualizaciones_ejecutar; ?></textarea> 
     </div> 
   </div> 


 <div class="form-group"> 
     <label for="_actualizaciones_estatus" class="col-sm-2 control-label"><?php _t("Estatus"); ?></label> 
     <div class="col-sm-10"> 
     <div class="radio">
        <label>
            <input disabled type="radio" name="_actualizaciones_estatus" value="1" <?php echo "$_actualizaciones_estatus_1"; ?>  >
            <?php _t("Activo"); ?> 
        </label>
     </div>
     <div class="radio">
        <label>
            <input disabled type="radio" name="_actualizaciones_estatus" value="0"  <?php echo "$_actualizaciones_estatus_0"; ?>  >
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
 <a href="index.php?p=_actualizaciones&c=txt&_actualizaciones_id=<?php echo $_actualizaciones_id; ?>">Formato texto</a> 
