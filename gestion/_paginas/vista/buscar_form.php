<?php 
 /**  
 magia_version: 0.0.8 
 **/ ?>
<h2>

<span class="glyphicon glyphicon-search"></span>

<?php _t("Buscar"); ?> 

</h2> 

<form class="" action="index.php" method="get"> 
<input type="hidden" name="p" value="_paginas"> 
<input type="hidden" name="c" value="buscar"> 
     <div class="form-group"> 
     <label for="_paginas_pagina" class="col-sm-2 control-label"><?php _t("Pagina");?></label> 
       <input type="text" class="form-control" name="_paginas_pagina" id="_paginas_pagina" placeholder="<?php _t("Pagina"); ?> "> 
   </div> 


       <button type="submit" class="btn btn-primary"><?php _t("Buscar"); ?></button> 
 </form> 
