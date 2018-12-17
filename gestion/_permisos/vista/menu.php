<?php 
 /**  
 magia_version: 0.0.8 
 **/ ?>
<h1><?php _t("Buscar"); ?></h1>

<form method="get" action="index.php">
    <input  type="hidden" name="p" value="_permisos">
    <input  type="hidden" name="c" value="buscar">
                    <div class="form-group">
                      <label for="Grupo"><?php _t("Grupo"); ?></label>
                      <input type="text" class="form-control" name="_permisos_grupo" id="_permisos_grupo" placeholder="<?php _t("Grupo"); ?>">
                    </div>
                     
                    <div class="form-group">
                      <label for="Pagina"><?php _t("Pagina"); ?></label>
                      <input type="text" class="form-control" name="_permisos_pagina" id="_permisos_pagina" placeholder="<?php _t("Pagina"); ?>">
                    </div>
                     
                    <div class="form-group">
                      <label for="Permiso"><?php _t("Permiso"); ?></label>
                      <input type="text" class="form-control" name="_permisos_permiso" id="_permisos_permiso" placeholder="<?php _t("Permiso"); ?>">
                    </div>
                         
  <button type="submit" class="btn btn-default"><?php _t("Buscar"); ?></button>
</form>