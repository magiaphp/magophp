<?php 
 /**  
 magia_version: 0.0.8 
 **/ ?>
<h1><?php _t("Buscar"); ?></h1>

<form method="get" action="index.php">
    <input  type="hidden" name="p" value="_opciones">
    <input  type="hidden" name="c" value="buscar">
                    <div class="form-group">
                      <label for="Opcion"><?php _t("Opcion"); ?></label>
                      <input type="text" class="form-control" name="_opciones_opcion" id="_opciones_opcion" placeholder="<?php _t("Opcion"); ?>">
                    </div>
                     
                    <div class="form-group">
                      <label for="Valor"><?php _t("Valor"); ?></label>
                      <input type="text" class="form-control" name="_opciones_valor" id="_opciones_valor" placeholder="<?php _t("Valor"); ?>">
                    </div>
                     
                    <div class="form-group">
                      <label for="Grupo"><?php _t("Grupo"); ?></label>
                      <input type="text" class="form-control" name="_opciones_grupo" id="_opciones_grupo" placeholder="<?php _t("Grupo"); ?>">
                    </div>
                         
  <button type="submit" class="btn btn-default"><?php _t("Buscar"); ?></button>
</form>