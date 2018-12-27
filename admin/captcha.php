<?php
/**
 * 
 * @return string
 * @package admin/captcha
 */
function captcha_genera(){
    
    return "10+0"; 
}
/**
 * Le paso el codigo y verifico si es correcto 
 * @param type $codigo Valor codificado
 * @param type $valor Valor en claro
 * @return boolean true, false segun si el valor es igual al codigo 
 * @package admin/captcha
 */
function captcha_verifica($codigo, $valor){
    if($codigo == $valor){
        return true;
    }else{
        return false;
    }
}
/**
 * Html del captcha
 * @package admin/captcha
 */
function captcha_html(){
    echo '<div class="form-group">
          <label for="captcha">Captcha</label>
          <input type="text" 
          class="form-control" 
          id="password" 
          name="password" 
          placeholder="'. captcha_genera().'">
          </div>    '; 
}