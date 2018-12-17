<?php 
 /**  
 magia_version: 0.0.8 
 **/ ?>
<h1><?php _t("Buscar"); ?></h1>

<form method="get" action="index.php">
    <input  type="hidden" name="p" value="logs">
    <input  type="hidden" name="c" value="buscar">
                    <div class="form-group">
                      <label for="Fecha"><?php _t("Fecha"); ?></label>
                      <input type="text" class="form-control" name="logs_fecha" id="logs_fecha" placeholder="<?php _t("Fecha"); ?>">
                    </div>
                     
                    <div class="form-group">
                      <label for="Usuario"><?php _t("Usuario"); ?></label>
                      <input type="text" class="form-control" name="logs_usuario" id="logs_usuario" placeholder="<?php _t("Usuario"); ?>">
                    </div>
                     
                    <div class="form-group">
                      <label for="Grupo"><?php _t("Grupo"); ?></label>
                      <input type="text" class="form-control" name="logs_grupo" id="logs_grupo" placeholder="<?php _t("Grupo"); ?>">
                    </div>
                     
                    <div class="form-group">
                      <label for="Ip"><?php _t("Ip"); ?></label>
                      <input type="text" class="form-control" name="logs_ip" id="logs_ip" placeholder="<?php _t("Ip"); ?>">
                    </div>
                     
                    <div class="form-group">
                      <label for="Mac"><?php _t("Mac"); ?></label>
                      <input type="text" class="form-control" name="logs_mac" id="logs_mac" placeholder="<?php _t("Mac"); ?>">
                    </div>
                     
                    <div class="form-group">
                      <label for="P"><?php _t("P"); ?></label>
                      <input type="text" class="form-control" name="logs_p" id="logs_p" placeholder="<?php _t("P"); ?>">
                    </div>
                     
                    <div class="form-group">
                      <label for="C"><?php _t("C"); ?></label>
                      <input type="text" class="form-control" name="logs_c" id="logs_c" placeholder="<?php _t("C"); ?>">
                    </div>
                     
                    <div class="form-group">
                      <label for="A"><?php _t("A"); ?></label>
                      <input type="text" class="form-control" name="logs_a" id="logs_a" placeholder="<?php _t("A"); ?>">
                    </div>
                     
                    <div class="form-group">
                      <label for="Comando"><?php _t("Comando"); ?></label>
                      <input type="text" class="form-control" name="logs_comando" id="logs_comando" placeholder="<?php _t("Comando"); ?>">
                    </div>
                     
                    <div class="form-group">
                      <label for="Argumento"><?php _t("Argumento"); ?></label>
                      <input type="text" class="form-control" name="logs_argumento" id="logs_argumento" placeholder="<?php _t("Argumento"); ?>">
                    </div>
                     
                    <div class="form-group">
                      <label for="Sospechoso"><?php _t("Sospechoso"); ?></label>
                      <input type="text" class="form-control" name="logs_sospechoso" id="logs_sospechoso" placeholder="<?php _t("Sospechoso"); ?>">
                    </div>
                         
  <button type="submit" class="btn btn-default"><?php _t("Buscar"); ?></button>
</form>