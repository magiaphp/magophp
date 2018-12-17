<?php 
 /**  
 magia_version: 0.0.8 
 **/ ?>
<h1><?php _t("Buscar"); ?></h1>

<form method="get" action="index.php">
    <input  type="hidden" name="p" value="_menu">
    <input  type="hidden" name="c" value="buscar">
                    <div class="form-group">
                      <label for="Ubicacion"><?php _t("Ubicacion"); ?></label>
                      <input type="text" class="form-control" name="_menu_ubicacion" id="_menu_ubicacion" placeholder="<?php _t("Ubicacion"); ?>">
                    </div>
                     
                    <div class="form-group">
                      <label for="Padre"><?php _t("Padre"); ?></label>
                      <input type="text" class="form-control" name="_menu_padre" id="_menu_padre" placeholder="<?php _t("Padre"); ?>">
                    </div>
                     
                    <div class="form-group">
                      <label for="Label"><?php _t("Label"); ?></label>
                      <input type="text" class="form-control" name="_menu_label" id="_menu_label" placeholder="<?php _t("Label"); ?>">
                    </div>
                     
                    <div class="form-group">
                      <label for="Url"><?php _t("Url"); ?></label>
                      <input type="text" class="form-control" name="_menu_url" id="_menu_url" placeholder="<?php _t("Url"); ?>">
                    </div>
                     
                    <div class="form-group">
                      <label for="Icono"><?php _t("Icono"); ?></label>
                      <input type="text" class="form-control" name="_menu_icono" id="_menu_icono" placeholder="<?php _t("Icono"); ?>">
                    </div>
                     
                    <div class="form-group">
                      <label for="Orden"><?php _t("Orden"); ?></label>
                      <input type="text" class="form-control" name="_menu_orden" id="_menu_orden" placeholder="<?php _t("Orden"); ?>">
                    </div>
                         
  <button type="submit" class="btn btn-default"><?php _t("Buscar"); ?></button>
</form>