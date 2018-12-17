<?php /**
  magia_version: 0.0.8
 * */ ?>
<h2>

    <span class="glyphicon glyphicon-search"></span>

    <?php _t("Buscar"); ?> 

</h2> 

<form class="" action="index.php" method="get"> 
    <input type="hidden" name="p" value="_idiomas"> 
    <input type="hidden" name="c" value="buscar"> 
    <div class="form-group"> 
        <label for="_idiomas_idioma" class="col-sm-2 control-label"><?php _t("Idioma"); ?></label> 
        <input type="text" class="form-control" name="_idiomas_idioma" id="_idiomas_idioma" placeholder="<?php _t("Idioma"); ?> "> 
    </div> 


    <div class="form-group"> 
        <label for="_idiomas_nombre" class="col-sm-2 control-label"><?php _t("Nombre"); ?></label> 
        <input type="text" class="form-control" name="_idiomas_nombre" id="_idiomas_nombre" placeholder="<?php _t("Nombre"); ?> "> 
    </div> 

    <div class="form-group"> 
        <label for="_idiomas_orden" class="col-sm-2 control-label"><?php _t("Orden"); ?></label> 
        <input type="number" class="form-control" name="_idiomas_orden" id="_idiomas_orden" placeholder="<?php _t("Orden"); ?> "> 
    </div> 


    <button type="submit" class="btn btn-primary"><?php _t("Buscar"); ?></button> 
</form> 
