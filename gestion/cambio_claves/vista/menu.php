<?php 
 /**  
 magia_version: 0.0.8 
 **/ ?>
<h1><?php _t("Buscar"); ?></h1>

<form method="get" action="index.php">
    <input  type="hidden" name="p" value="cambio_claves">
    <input  type="hidden" name="c" value="buscar">
                    <div class="form-group">
                      <label for="Usuario"><?php _t("Usuario"); ?></label>
                      <input type="text" class="form-control" name="cambio_claves_usuario" id="cambio_claves_usuario" placeholder="<?php _t("Usuario"); ?>">
                    </div>
                     
                    <div class="form-group">
                      <label for="Codigo"><?php _t("Codigo"); ?></label>
                      <input type="text" class="form-control" name="cambio_claves_codigo" id="cambio_claves_codigo" placeholder="<?php _t("Codigo"); ?>">
                    </div>
                     
                    <div class="form-group">
                      <label for="Fecha_solicitud"><?php _t("Fecha_solicitud"); ?></label>
                      <input type="text" class="form-control" name="cambio_claves_fecha_solicitud" id="cambio_claves_fecha_solicitud" placeholder="<?php _t("Fecha_solicitud"); ?>">
                    </div>
                     
                    <div class="form-group">
                      <label for="Codigo_usado"><?php _t("Codigo_usado"); ?></label>
                      <input type="text" class="form-control" name="cambio_claves_codigo_usado" id="cambio_claves_codigo_usado" placeholder="<?php _t("Codigo_usado"); ?>">
                    </div>
                         
  <button type="submit" class="btn btn-default"><?php _t("Buscar"); ?></button>
</form>