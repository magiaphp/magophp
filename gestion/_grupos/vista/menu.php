<?php 
 /**  
 magia_version: 0.0.8 
 **/ ?>
<h1><?php _t("Buscar"); ?></h1>

<form method="get" action="index.php">
    <input  type="hidden" name="p" value="_grupos">
    <input  type="hidden" name="c" value="buscar">
                    <div class="form-group">
                      <label for="Grupo"><?php _t("Grupo"); ?></label>
                      <input type="text" class="form-control" name="_grupos_grupo" id="_grupos_grupo" placeholder="<?php _t("Grupo"); ?>">
                    </div>
                         
  <button type="submit" class="btn btn-default"><?php _t("Buscar"); ?></button>
</form>