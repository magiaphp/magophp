<?php /**
  magia_version: 0.0.8
 * */ ?>
<h2>

    <span class="glyphicon glyphicon-<?php echo _menu_icono_segun_pagina($p); ?>"></span> 

    <?php _t("Editar"); ?></h2> 

</h2> 



<form class="form-horizontal" method="post" action="index.php"> 
    <input type="hidden" name="p" value="_opciones"> 
    <input type="hidden" name="c" value="editar"> 
    <input type="hidden" name="a" value="editar"> 
    <input type="hidden" name="_opciones_id" value="<?php echo $_opciones_id; ?>"> 




    <div class="form-group"> 
        <label for="_opciones_opcion" class="col-sm-2 control-label"><?php _t("Opcion"); ?></label> 
        <div class="col-sm-10"> 
            <input type="text" class="form-control" name="_opciones_opcion" id="_opciones_opcion" placeholder="<?php _t("Opcion"); ?>" value="<?php echo $_opciones_opcion ?>"   > 
        </div> 
    </div> 


    <div class="form-group"> 
        <label for="_opciones_valor" class="col-sm-2 control-label"><?php _t("Valor"); ?></label> 
        <div class="col-sm-10"> 
            <?php if (strpos($_opciones_opcion, '_thead')) { ?>
            
            <?php 
           // echo var_dump(json_decode($_opciones_valor));
            
            foreach (json_decode($_opciones_valor) as $key => $value) {
                //echo "<input type=\"checkbox\" name=\"_opciones_valor[$key]\" value=\"true\" $value>  $key $value<br>"; 
                
//                echo var_dump($value);
                $checked_true = ($value =="si")?"checked":"";
                $checked_false = ($value == "no")?"checked":"";
                
                echo $key . ' <input type="radio" name="_opciones_valor['.$key.']" value="si" '.$checked_true.'> Visible <input type="radio" name="_opciones_valor['.$key.']" value="no" '.$checked_false.'> No visible<br>'; 
                
            }
            ?>
            
                      
            <?php } else { ?> 
                <textarea  class="form-control" name="_opciones_valor" id="_opciones_valor" placeholder="<?php _t("Valor"); ?>"><?php echo $_opciones_valor; ?></textarea> 
            <?php } ?>

        </div> 
    </div> 


    <div class="form-group"> 
        <label for="_opciones_grupo" class="col-sm-2 control-label"><?php _t("Grupo"); ?></label> 
        <div class="col-sm-10"> 
            <input type="text" class="form-control" name="_opciones_grupo" id="_opciones_grupo" placeholder="<?php _t("Grupo"); ?>" value="<?php echo $_opciones_grupo; ?>"   > 
        </div> 
    </div> 

    <div class="form-group"> 
        <div class="col-sm-offset-2 col-sm-10"> 
            <button type="submit" class="btn btn-primary"><?php _t("Editar"); ?></button> 
        </div> 
    </div>     
</form> 
