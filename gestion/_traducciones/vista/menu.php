<?php 
 /**  
 magia_version: 0.0.8 
 **/ ?>
<h1><?php _t("Buscar"); ?></h1>

<form method="get" action="index.php">
    <input  type="hidden" name="p" value="_traducciones">
    <input  type="hidden" name="c" value="buscar">
                    <div class="form-group">
                      <label for="Frase"><?php _t("Frase"); ?></label>
                      <input type="text" class="form-control" name="_traducciones_frase" id="_traducciones_frase" placeholder="<?php _t("Frase"); ?>">
                    </div>
                     
                    <div class="form-group">
                      <label for="Idioma"><?php _t("Idioma"); ?></label>
                      <input type="text" class="form-control" name="_traducciones_idioma" id="_traducciones_idioma" placeholder="<?php _t("Idioma"); ?>">
                    </div>
                     
                    <div class="form-group">
                      <label for="Traduccion"><?php _t("Traduccion"); ?></label>
                      <input type="text" class="form-control" name="_traducciones_traduccion" id="_traducciones_traduccion" placeholder="<?php _t("Traduccion"); ?>">
                    </div>
                         
  <button type="submit" class="btn btn-default"><?php _t("Buscar"); ?></button>
</form>