<?php 
/**
 * Muestra los errores SQL de una forma mas clara
 * @param type $dir
 * @param type $file
 * @param type $line
 * @package admin/errores
 */
function error($dir, $file, $line){
    echo "<h3></h3>";
    echo "<p>Dir: $dir</p>";
    echo "<p>File: $file</p>";
    echo "<p>Line: $line</p>";
}