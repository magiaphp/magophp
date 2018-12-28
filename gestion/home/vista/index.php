<?php



function magiaphp_mostrar_info($archivo) {
    $lineas = file($archivo);
//echo var_dump($líneas);
  //  echo "<pre>";
    foreach ($lineas as $num_línea => $línea) {
        //  echo "Línea #<b>{$num_línea}</b> : " . htmlspecialchars($línea) . "<br />\n";    
        $info = explode("=", $línea);
        echo "<p>$info[0]: $info[1] </p>";
         
    }
    //echo "</pre>";
}

$archivos = array(
    "./_actualizaciones/info.txt",
    "./_contenido/info.txt",
    "./_grupos/info.txt",
    "./_idiomas/info.txt",    
    "./_menu/info.txt"
    ); 


    foreach ($archivos as $key => $value) {
        magiaphp_mostrar_info($value);
}





?>

<?php

/*

  <iframe
  height="100%"
  width="100%"
  frameborder="0"
  src="../documentacion/"
  ></iframe> */
?>

<div class="row">
  <div class="col-sm-6 col-md-4">
    <div class="thumbnail">
      <img src="..." alt="...">
      <div class="caption">
        <h3>Thumbnail label</h3>
        <p>...</p>
        <p><a href="#" class="btn btn-primary" role="button">Button</a> <a href="#" class="btn btn-default" role="button">Button</a></p>
      </div>
    </div>
  </div>
  <div class="col-sm-6 col-md-4">
    <div class="thumbnail">
      <img src="..." alt="...">
      <div class="caption">
        <h3>Thumbnail label</h3>
        <p>...</p>
        <p><a href="#" class="btn btn-primary" role="button">Button</a> <a href="#" class="btn btn-default" role="button">Button</a></p>
      </div>
    </div>
  </div>
  <div class="col-sm-6 col-md-4">
    <div class="thumbnail">
      <img src="..." alt="...">
      <div class="caption">
        <h3>Thumbnail label</h3>
        <p>...</p>
        <p><a href="#" class="btn btn-primary" role="button">Button</a> <a href="#" class="btn btn-default" role="button">Button</a></p>
      </div>
    </div>
  </div>
  <div class="col-sm-6 col-md-4">
    <div class="thumbnail">
      <img src="..." alt="...">
      <div class="caption">
        <h3>Thumbnail label</h3>
        <p>...</p>
        <p><a href="#" class="btn btn-primary" role="button">Button</a> <a href="#" class="btn btn-default" role="button">Button</a></p>
      </div>
    </div>
  </div>
  <div class="col-sm-6 col-md-4">
    <div class="thumbnail">
      <img src="..." alt="...">
      <div class="caption">
        <h3>Thumbnail label</h3>
        <p>...</p>
        <p><a href="#" class="btn btn-primary" role="button">Button</a> <a href="#" class="btn btn-default" role="button">Button</a></p>
      </div>
    </div>
  </div>
</div>