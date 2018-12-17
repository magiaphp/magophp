<?php 
 /**  
 magia_version: 0.0.8 
 **/ ?>
<h1><?php _t("Buscar"); ?></h1>

<form method="get" action="index.php">
    <input  type="hidden" name="p" value="actualizaciones">
    <input  type="hidden" name="c" value="buscar">
                    <div class="form-group">
                      <label for="Codigo"><?php _t("Codigo"); ?></label>
                      <input type="text" class="form-control" name="actualizaciones_codigo" id="actualizaciones_codigo" placeholder="<?php _t("Codigo"); ?>">
                    </div>
                     
                    <div class="form-group">
                      <label for="Requiere"><?php _t("Requiere"); ?></label>
                      <input type="text" class="form-control" name="actualizaciones_requiere" id="actualizaciones_requiere" placeholder="<?php _t("Requiere"); ?>">
                    </div>
                     
                    <div class="form-group">
                      <label for="Nombre"><?php _t("Nombre"); ?></label>
                      <input type="text" class="form-control" name="actualizaciones_nombre" id="actualizaciones_nombre" placeholder="<?php _t("Nombre"); ?>">
                    </div>
                     
                    <div class="form-group">
                      <label for="Descripcion"><?php _t("Descripcion"); ?></label>
                      <input type="text" class="form-control" name="actualizaciones_descripcion" id="actualizaciones_descripcion" placeholder="<?php _t("Descripcion"); ?>">
                    </div>
                     
                    <div class="form-group">
                      <label for="Ejecutar"><?php _t("Ejecutar"); ?></label>
                      <input type="text" class="form-control" name="actualizaciones_ejecutar" id="actualizaciones_ejecutar" placeholder="<?php _t("Ejecutar"); ?>">
                    </div>
                     
                    <div class="form-group">
                      <label for="Estatus"><?php _t("Estatus"); ?></label>
                      <input type="text" class="form-control" name="actualizaciones_estatus" id="actualizaciones_estatus" placeholder="<?php _t("Estatus"); ?>">
                    </div>
                         
  <button type="submit" class="btn btn-default"><?php _t("Buscar"); ?></button>
</form>