
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
            <p>Visible?</p><?php
            // con esto busco si el campo tiene _thead, 
            if (strpos($_opciones_opcion, '_thead')) {
                ?>

                <?php
                $tabla = str_replace("_thead", "", $_opciones_opcion);
                foreach (_opciones_campos_disponibles_segun_tabla($tabla) as $tabla_campo) {


                    $checked_true = (_opciones_valor_json_segun_tabla_campo($tabla, $tabla_campo) == 'si') ? "checked" : "";
                    $checked_false = (_opciones_valor_json_segun_tabla_campo($tabla, $tabla_campo) == 'no') ? "checked" : "";


                    echo "<input type=\"radio\" name=\"_opciones_valor[$tabla_campo]\" value=\"si\" $checked_true>  si ";
                    echo "<input type=\"radio\" name=\"_opciones_valor[$tabla_campo]\" value=\"no\" $checked_false> no <b>$tabla_campo</b> <br>";






                    /*
                      foreach (json_decode($_opciones_valor) as $dispo_item => $dispo_valor) {

                      $checked_true = ( ($tabla_campo == $dispo_item) && $dispo_valor == "si") ? "checked" : "";
                      $checked_false = (($tabla_campo == $dispo_item) && $dispo_valor == "no") ? "checked" : "";

                      // echo $dispo_item . ' <input type="radio" name="_opciones_valor[' . $dispo_item . ']" value="si" ' . $checked_true . '> Visible <input type="radio" name="_opciones_valor[' . $dispo_item . ']" value="no" ' . $checked_false . '> No visible<br>';
                      if($tabla_campo){

                      echo "<input type=\"radio\" name=\"_opciones_valor[$tabla_campo]\" value=\"si\" $checked_true>  si ";
                      echo "<input type=\"radio\" name=\"_opciones_valor[$tabla_campo]\" value=\"no\" $checked_false> no <b>$tabla_campo</b> <br>";
                      }

                      }
                     * 
                     */
                }


                echo "<hr>";


                // echo var_dump(json_decode($_opciones_valor));

                foreach (json_decode($_opciones_valor) as $dispo_item => $dispo_valor) {
                    //echo "<input type=\"checkbox\" name=\"_opciones_valor[$key]\" value=\"true\" $value>  $key $value<br>"; 
//                echo var_dump($value);
                    $checked_true = ($dispo_valor == "si") ? "checked" : "";
                    $checked_false = ($dispo_valor == "no") ? "checked" : "";

                    // echo $dispo_item . ' <input type="radio" name="_opciones_valor[' . $dispo_item . ']" value="si" ' . $checked_true . '> Visible <input type="radio" name="_opciones_valor[' . $dispo_item . ']" value="no" ' . $checked_false . '> No visible<br>';
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
