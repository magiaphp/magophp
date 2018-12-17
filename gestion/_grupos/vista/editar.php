<?php 
 /**  
 magia_version: 0.0.8 
 **/ ?>
<h2>

<span class="<?php echo _menu_icono_segun_pagina($p); ?>"></span> 

<?php _t("Editar _grupos"); ?></h2> 

</h2> 


<?php 
        mensaje("atencion","Si no esta seguro, no modifique nada porfavor");
?>
     <form class="form-horizontal" method="post" action="index.php"> 
     <input type="hidden" name="p" value="_grupos"> 
     <input type="hidden" name="c" value="editar"> 
     <input type="hidden" name="a" value="editar"> 
     <input type="hidden" name="_grupos_id" value="<?php echo $_grupos_id; ?>"> 

 <div class="form-group"> 
     <label for="_grupos_grupo" class="col-sm-2 control-label"><?php _t("Grupo"); ?></label> 
     <div class="col-sm-10"> 
       <input type="text" class="form-control" name="_grupos_grupo" id="_grupos_grupo" placeholder="<?php _t("Grupo"); ?>" value="<?php echo $_grupos_grupo; ?>"   > 
     </div> 
   </div> 


   <div class="form-group"> 
 <div class="col-sm-offset-2 col-sm-10"> 
       <button type="submit" class="btn btn-primary"><?php _t("Editar"); ?></button> 
     </div> 
   </div>     
 </form> 


<?php 
 /**  
 magia_version: 0.0.8 
 **/ ?>
<h2><?php _t("Atencion"); ?></h2>
                <p><?php _t("Ud esta a por borrar definiticamente este registro, desea hacerlo?"); ?></p>
                <a class="btn btn-danger" href="index.php?p=_grupos&c=borrar&_grupos_id=<?php echo $_grupos_id; ?>"><?php _t("Si,borrar"); ?></a>