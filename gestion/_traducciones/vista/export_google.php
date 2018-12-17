https://translate.google.be/?hl=fr

<h2>Pasos para traducir en google</h2>

<ul>
    <li>Llenar la tabla traduccion con 7.en_GB.sql (remplazar en_GB del contenido por el idioma deseado)</li>
    <li>Exportar 
        <form action="?" method="get">
            <input type="hidden"name="p" value="_traducciones">
            <input type="hidden"name="c" value="export_google">
            <select name="idioma"><?php _idiomas_add(); ?></select>
            <input type="text" name="agrupados_en" value="100">
            <input type="submit" value="ok">
        </form>
    </li>
</ul>



<p>Copiar y pegar el contenido en el <a href="https://translate.google.be/?hl=fr">traductor</a> de google</p>
<p>Esta separado por grupos de 100 ya que google no acepta muchas lineas</p>
<p>Una vez tradicido, remplazar </p>
<p>UPDATE `_traducciones` SET `traduccion` = <code>UPDATE `_traducciones` SET `traduccion` =</code></p>
<p>Una vez tradicido, remplazar </p>



UPDATE `_traducciones` SET `traduccion` = 'contenido' WHERE `_traducciones`.`id` = 13;


<hr>

INSERT INTO `_traducciones` (`id`, `frase`, `idioma`, `traduccion`) VALUES (NULL, 'Cambiar clave', 'en_GB', 'Change password');

<hr>




<?php

$i = 0;

echo "<h2>$i</h2>"; 
while ($_traducciones = mysql_fetch_array($sql)) {
   // include "./_traducciones/reg/reg.php";
    
    if($i % 100 == 0){
        echo "<br><h2>$i</h2><br>"; 
    }

    //echo "<span>UPDATE `_traducciones` SET `traduccion` = </span>"; 
    echo "<span>axxxxxxxa </span>"; 
    echo "<span>`$_traducciones[frase]`</span>"; 
    echo "<span class='esconder'> xmmmmmmmmxxx = </span>"; 
    echo "<span>$_traducciones[id]</span>"; 
    echo ";<br>"; 
    
    
    
    
    
    // echo "(null, '$_traducciones_frase', 'fr_BE', '<font color=\"red\">$_traducciones_traduccion</font>'),<br>";
  //  echo "(null, '$_traducciones_frase', 'fr_BE', '<font color=\"red\">$_traducciones_traduccion</font>'),<br>";
    $i++;
}
