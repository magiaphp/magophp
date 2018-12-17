<?php 
 /**  
 magia_version: 0.0.8 
 **/ ?>

            <form method="post" action="index.php" >
                <input type="hidden" name="p" value="logs">
                <input type="hidden" name="c" value="crear">    
                <input type="hidden" name="a" value="crear">    
                <tr> <td><input class="form-control" type="text" name="logs_fecha" value="" placeholder="<?php _t("Fecha"); ?>"></td> 
 <td><input class="form-control" type="text" name="logs_usuario" value="" placeholder="<?php _t("Usuario"); ?>"></td> 
 <td><input class="form-control" type="text" name="logs_grupo" value="" placeholder="<?php _t("Grupo"); ?>"></td> 
 <td><input class="form-control" type="text" name="logs_ip" value="" placeholder="<?php _t("Ip"); ?>"></td> 
 <td><input class="form-control" type="text" name="logs_mac" value="" placeholder="<?php _t("Mac"); ?>"></td> 
 <td><input class="form-control" type="text" name="logs_p" value="" placeholder="<?php _t("P"); ?>"></td> 
 <td><input class="form-control" type="text" name="logs_c" value="" placeholder="<?php _t("C"); ?>"></td> 
 <td><input class="form-control" type="text" name="logs_a" value="" placeholder="<?php _t("A"); ?>"></td> 
 <td><input class="form-control" type="text" name="logs_comando" value="" placeholder="<?php _t("Comando"); ?>"></td> 
 <td><input class="form-control" type="text" name="logs_argumento" value="" placeholder="<?php _t("Argumento"); ?>"></td> 
 <td><input class="form-control" type="text" name="logs_sospechoso" value="" placeholder="<?php _t("Sospechoso"); ?>"></td> 
<td><input class="btn btn-primary" type="submit" value="<?php _t("Registrar"); ?>" ></td>        
    </tr>
</form> 