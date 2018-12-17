<?php

/**
 * 
 * @param type $seleccionado
 */
function bst_iconos_add($seleccionado = FALSE) {

    $lineas = file("../admin/bst_data.txt");
    foreach ($lineas as $num_línea => $línea) {
        $valor = trim(substr($línea, 11));
        echo '<option ';
        if ($seleccionado == $valor) {
            echo 'selected = "selected" ';
        }
        echo 'value="glyphicon glyphicon-' . $valor . '">' . substr($línea, 0, 10) . ' ' . $valor . '</option>';
    }
}

function bst_dropdowns($titulo, $items){
    
    
    $m =  '<div class="dropdown">
  <button class="btn btn-default dropdown-toggle" type="button" id="dropdownMenu1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
    '.$titulo.'
    <span class="caret"></span>
  </button>
  <ul class="dropdown-menu" aria-labelledby="dropdownMenu1">
    
    '; 
    
      foreach ($items as $key => $value) {
       $m .= '<li><a href="'.$key.'">'.$value.'</a></li>'; 
    }
    
    
    $m .='<li><a href="#">Another action</a></li>
    <li><a href="#">Something else here</a></li>
    <li role="separator" class="divider"></li>
    <li><a href="#">Separated link</a></li>
  </ul>
</div>';
    
    
    return $m;
    
    
    
    
}
