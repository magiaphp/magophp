<?php 
 /**  
 magia_version: 0.0.8 
 **/ ?>
<h2><?php _t("Atencion"); ?></h2>
                <p><?php _t("Ud esta a por borrar definiticamente este registro, desea hacerlo?"); ?></p>
                <a class="btn btn-danger" href="index.php?p=cambio_claves&c=borrar&cambio_claves_id=<?php echo $cambio_claves_id; ?>"><?php _t("Si,borrar"); ?></a>