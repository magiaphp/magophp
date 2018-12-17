<?php 
 /**  
 magia_version: 0.0.8 
 **/ ?>
<div class="col-sm-3 col-md-2 sidebar"> 

<h2><?php _t("Buscar"); ?></h2> 

<form class="" action="index.php" method="get"> 
<input type="hidden" name="p" value="actualizaciones"> 
<input type="hidden" name="c" value="buscar"> 
     <div class="form-group"> 
     <label for="actualizaciones_codigo" class="col-sm-2 control-label"><?php _t("Codigo");?></label> 
       <input type="text" class="form-control" name="actualizaciones_codigo" id="actualizaciones_codigo" placeholder="<?php _t("Codigo"); ?> "> 
   </div> 


     <div class="form-group"> 
     <label for="actualizaciones_requiere" class="col-sm-2 control-label"><?php _t("Requiere");?></label> 
       <input type="text" class="form-control" name="actualizaciones_requiere" id="actualizaciones_requiere" placeholder="<?php _t("Requiere"); ?> "> 
   </div> 


     <div class="form-group"> 
     <label for="actualizaciones_nombre" class="col-sm-2 control-label"><?php _t("Nombre");?></label> 
       <input type="text" class="form-control" name="actualizaciones_nombre" id="actualizaciones_nombre" placeholder="<?php _t("Nombre"); ?> "> 
   </div> 


     <div class="form-group"> 
     <label for="actualizaciones_descripcion" class="col-sm-2 control-label"><?php _t("Descripcion");?></label> 
       <input type="text" class="form-control" name="actualizaciones_descripcion" id="actualizaciones_descripcion" placeholder="<?php _t("Descripcion"); ?> "> 
   </div> 


     <div class="form-group"> 
     <label for="actualizaciones_ejecutar" class="col-sm-2 control-label"><?php _t("Ejecutar");?></label> 
       <input type="text" class="form-control" name="actualizaciones_ejecutar" id="actualizaciones_ejecutar" placeholder="<?php _t("Ejecutar"); ?> "> 
   </div> 


     <div class="form-group"> 
     <label for="actualizaciones_estatus" class="col-sm-2 control-label"><?php _t("Estatus");?></label> 
       <input type="text" class="form-control" name="actualizaciones_estatus" id="actualizaciones_estatus" placeholder="<?php _t("Estatus"); ?> "> 
   </div> 


       <button type="submit" class="btn btn-primary"><?php _t("Buscar"); ?></button> 
 </form> 
 </div> 
