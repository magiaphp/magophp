<?php 
 /**  
 magia_version: 0.0.8 
 **/ ?>
<h2>

<span class="glyphicon glyphicon-<?php echo _menu_icono_segun_pagina($p); ?>"></span> 

<?php _t("Editar"); ?></h2> 

</h2> 

     <form class="form-horizontal" method="post" action="index.php"> 
     <input type="hidden" name="p" value="logs"> 
     <input type="hidden" name="c" value="editar"> 
     <input type="hidden" name="a" value="editar"> 
     <input type="hidden" name="logs_id" value="<?php echo $logs_id; ?>"> 

 <?php 
                        $campos = array(array(
"type" => "text",
"name" => "logs_fecha",
"value" => "$logs_fecha",                                                                        
    
"for" => "logs_fecha",
"label" => "fecha",
"class" => "form-control",
"id" => "logs_fecha",
"placeholder" => "fecha",
                    ),array(
"type" => "text",
"name" => "logs_usuario",
"value" => "$logs_usuario",                                                                        
    
"for" => "logs_usuario",
"label" => "usuario",
"class" => "form-control",
"id" => "logs_usuario",
"placeholder" => "usuario",
                    ),array(
"type" => "text",
"name" => "logs_grupo",
"value" => "$logs_grupo",                                                                        
    
"for" => "logs_grupo",
"label" => "grupo",
"class" => "form-control",
"id" => "logs_grupo",
"placeholder" => "grupo",
                    ),array(
"type" => "text",
"name" => "logs_ip",
"value" => "$logs_ip",                                                                        
    
"for" => "logs_ip",
"label" => "ip",
"class" => "form-control",
"id" => "logs_ip",
"placeholder" => "ip",
                    ),array(
"type" => "text",
"name" => "logs_mac",
"value" => "$logs_mac",                                                                        
    
"for" => "logs_mac",
"label" => "mac",
"class" => "form-control",
"id" => "logs_mac",
"placeholder" => "mac",
                    ),array(
"type" => "text",
"name" => "logs_p",
"value" => "$logs_p",                                                                        
    
"for" => "logs_p",
"label" => "p",
"class" => "form-control",
"id" => "logs_p",
"placeholder" => "p",
                    ),array(
"type" => "text",
"name" => "logs_c",
"value" => "$logs_c",                                                                        
    
"for" => "logs_c",
"label" => "c",
"class" => "form-control",
"id" => "logs_c",
"placeholder" => "c",
                    ),array(
"type" => "text",
"name" => "logs_a",
"value" => "$logs_a",                                                                        
    
"for" => "logs_a",
"label" => "a",
"class" => "form-control",
"id" => "logs_a",
"placeholder" => "a",
                    ),array(
"type" => "text",
"name" => "logs_comando",
"value" => "$logs_comando",                                                                        
    
"for" => "logs_comando",
"label" => "comando",
"class" => "form-control",
"id" => "logs_comando",
"placeholder" => "comando",
                    ),array(
"type" => "text",
"name" => "logs_argumento",
"value" => "$logs_argumento",                                                                        
    
"for" => "logs_argumento",
"label" => "argumento",
"class" => "form-control",
"id" => "logs_argumento",
"placeholder" => "argumento",
                    ),array(
"type" => "text",
"name" => "logs_sospechoso",
"value" => "$logs_sospechoso",                                                                        
    
"for" => "logs_sospechoso",
"label" => "sospechoso",
"class" => "form-control",
"id" => "logs_sospechoso",
"placeholder" => "sospechoso",
                    ),);

        foreach ($campos as $key => $value) {

        // echo var_dump($value);


        switch ($value['type']) {
            /**
             * hidden
             */
            case 'hidden':
                echo ' <input type="hidden" name="' . $value['name'] . '" value="' . $value['value'] . '">  ';
                break;
            /**
             * P
             * 
             */
            case 'p':
                echo ' <div class="form-group"> 
                            <label for="' . $value['for'] . '" class="col-sm-2 control-label">' . _tr($value['label']) . '</label> 
                            <div class="col-sm-10"> 
                               <p class="form-control-static">'.$value['value'].'</p>
                            </div> 
                          </div> ';


                break;
            /**
             * Texto
             */
            case 'text':
                echo ' <div class="form-group"> 
                            <label for="' . $value['for'] . '" class="col-sm-2 control-label">' . _tr($value['label']) . '</label> 
                            <div class="col-sm-10"> 
                              <input 
                                  type="text" 
                                  class="form-control" 
                                  name="' . $value['name'] . '" 
                                  id="' . $value['id'] . '" 
                                  placeholder="' . _tr($value['placeholder']) . '" 
                                  value="' . $value['value'] . '"  
                                  > 
                            </div> 
                          </div> ';


                break;
            /**
             * Email
             */
            case 'email':
                echo ' <div class="form-group"> 
                            <label for="' . $value['for'] . '" class="col-sm-2 control-label">' . _tr($value['label']) . '</label> 
                            <div class="col-sm-10"> 
                              <input 
                                  type="email" 
                                  class="form-control" 
                                  name="' . $value['name'] . '" 
                                  id="' . $value['id'] . '" 
                                  placeholder="' . _tr($value['placeholder']) . '" 
                                  value="' . $value['value'] . '"  
                                  > 
                            </div> 
                          </div> ';


                break;
            case 'textarea':
                echo ' <div class="form-group"> 
                            <label for="' . $value['for'] . '" class="col-sm-2 control-label">' . _tr($value['label']) . '</label> 
                            <div class="col-sm-10"> 
                              <textarea class="form-control" >' . $value['value'] . '</textarea> 
                            </div> 
                          </div> ';


                break;
            /**
             * Campo tipo menu deruante 
             * <select></select>
             */
            case 'select':
                echo ' <div class="form-group"> 
                            <label for="' . $value['for'] . '" class="col-sm-2 control-label">' . _tr($value['label']) . '</label> 
                            <div class="col-sm-10"> 
                                <select class="' . $value['class'] . '" name="' . $value['name'] . '" id="' . $value['id'] . '">
                                    ';
                foreach ($value['options'] as $option_key => $option_value) {
                    $selected = ( $value['selected'] == $option_key ) ? " selected=\"\" " : "";
                    echo '<option value="' . $option_key . '" ' . $selected . ' >' . $option_value . '</option>';
                }
                echo '
                                </select>
                            </div> 
                          </div> ';
                break;
            /**
             * 
             */
            case 'checkbox':
                echo ' <div class="form-group"> 
                            <label for="' . $value['for'] . '" class="col-sm-2 control-label">' . _tr($value['label']) . '</label> 
                            <div class="col-sm-10"> ';

                foreach ($value['options'] as $checkbox_key => $checkbox_value) {

                    $checked = ( in_array($checkbox_key, $value['selected']) ) ? " checked=\"\" " : "";

                    echo '<input type="checkbox" value="' . $checkbox_key . '" ' . $checked . '> ' . $checkbox_value . '<br>';
                }
                echo '
                                
                            </div> 
                          </div> ';

                break;
                /**
                 * 
                 */
            case 'radio':
                echo ' <div class="form-group"> 
                            <label for="' . $value['for'] . '" class="col-sm-2 control-label">' . _tr($value['label']) . '</label> 
                            <div class="col-sm-10"> ';

                foreach ($value['options'] as $radio_key => $radio_value) {


                    $checked = ( in_array($radio_key, $value['selected']) ) ? " checked=\"\" " : "";

                    echo '    <input type="radio" name="'.$value['name'].'" value="'.$value['value'].'" '.$checked.'> ' .$radio_value . '<br>'; 
                }
                echo '
                                
                            </div> 
                          </div> ';

                break;



            /**
             * Submit
             */
            case 'submit':
                echo '<div class="form-group"> 
                <div class="col-sm-offset-2 col-sm-10"> 
                    <button type="submit" class="' . $value['class'] . '">' . _tr($value['label']) . '</button> 
                </div> 
            </div>  ';
                break;
            /**
             * reset
             */
            case 'reset':
                echo '<div class="form-group"> 
                <div class="col-sm-offset-2 col-sm-10"> 
                    <button type="reset" class="' . $value['class'] . '">' . _tr($value['label']) . '</button> 
                </div> 
            </div>  ';
                break;


            default:
                break;
        }
        
    }
    
?>

   <div class="form-group"> 
 <div class="col-sm-offset-2 col-sm-10"> 
       <button type="submit" class="btn btn-primary"><?php _t("Editar"); ?></button> 
     </div> 
   </div>     
 </form> 
