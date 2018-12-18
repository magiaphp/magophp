<?php 
 /**  
 magia_version: 0.0.11 
 **/ ?>
<div class="col-sm-3 col-md-2 sidebar"> 

<h2><?php _t("Buscar"); ?></h2> 

<form class="" action="index.php" method="get"> 
<input type="hidden" name="p" value="_actualizaciones"> 
<input type="hidden" name="c" value="buscar"> 
     <div class="form-group"> 
     <label for="_actualizaciones_version" class="col-sm-2 control-label"><?php _t("Version");?></label> 
       <input type="text" class="form-control" name="_actualizaciones_version" id="_actualizaciones_version" placeholder="<?php _t("Version"); ?> "> 
   </div> 


     <div class="form-group"> 
     <label for="_actualizaciones_requiere" class="col-sm-2 control-label"><?php _t("Requiere");?></label> 
       <input type="text" class="form-control" name="_actualizaciones_requiere" id="_actualizaciones_requiere" placeholder="<?php _t("Requiere"); ?> "> 
   </div> 


     <div class="form-group"> 
     <label for="_actualizaciones_nombre" class="col-sm-2 control-label"><?php _t("Nombre");?></label> 
       <input type="text" class="form-control" name="_actualizaciones_nombre" id="_actualizaciones_nombre" placeholder="<?php _t("Nombre"); ?> "> 
   </div> 


     <div class="form-group"> 
     <label for="_actualizaciones_descripcion" class="col-sm-2 control-label"><?php _t("Descripcion");?></label> 
       <input type="text" class="form-control" name="_actualizaciones_descripcion" id="_actualizaciones_descripcion" placeholder="<?php _t("Descripcion"); ?> "> 
   </div> 


     <div class="form-group"> 
     <label for="_actualizaciones_ejecutar" class="col-sm-2 control-label"><?php _t("Ejecutar");?></label> 
       <input type="text" class="form-control" name="_actualizaciones_ejecutar" id="_actualizaciones_ejecutar" placeholder="<?php _t("Ejecutar"); ?> "> 
   </div> 


     <div class="form-group"> 
     <label for="_actualizaciones_estatus" class="col-sm-2 control-label"><?php _t("Estatus");?></label> 
       <input type="text" class="form-control" name="_actualizaciones_estatus" id="_actualizaciones_estatus" placeholder="<?php _t("Estatus"); ?> "> 
   </div> 


       <button type="submit" class="btn btn-primary"><?php _t("Buscar"); ?></button> 
 </form> 
 </div> 
