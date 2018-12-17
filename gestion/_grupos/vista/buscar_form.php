<?php 
 /**  
 magia_version: 0.0.8 
 **/ ?>
<h2>

<span class="glyphicon glyphicon-search"></span>

<?php _t("Buscar"); ?> 

</h2> 

<form class="" action="index.php" method="get"> 
<input type="hidden" name="p" value="_grupos"> 
<input type="hidden" name="c" value="buscar"> 
     <div class="form-group"> 
     <label for="_grupos_grupo" class="col-sm-2 control-label"><?php _t("Grupo");?></label> 
       <input type="text" class="form-control" name="_grupos_grupo" id="_grupos_grupo" placeholder="<?php _t("Grupo"); ?> "> 
   </div> 


       <button type="submit" class="btn btn-primary"><?php _t("Buscar"); ?></button> 
 </form> 
