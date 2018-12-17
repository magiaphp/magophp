<?php 
 /**  
 magia_version: 0.0.8 
 **/ ?>
<h1><?php _t("Buscar"); ?></h1>

<form method="get" action="index.php">
    <input  type="hidden" name="p" value="_contenido">
    <input  type="hidden" name="c" value="buscar">
                    <div class="form-group">
                      <label for="Frase"><?php _t("Frase"); ?></label>
                      <input type="text" class="form-control" name="_contenido_frase" id="_contenido_frase" placeholder="<?php _t("Frase"); ?>">
                    </div>
                     
                    <div class="form-group">
                      <label for="Contexto"><?php _t("Contexto"); ?></label>
                      <input type="text" class="form-control" name="_contenido_contexto" id="_contenido_contexto" placeholder="<?php _t("Contexto"); ?>">
                    </div>
                         
  <button type="submit" class="btn btn-default"><?php _t("Buscar"); ?></button>
</form>