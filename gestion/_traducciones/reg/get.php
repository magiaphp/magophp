<?php

/**
  magia_version: 0.0.8
 * */
//$_traducciones_id = mysql_real_escape_string($_GET['_traducciones_id']); 




$_traducciones_frase = (isset($_GET['_traducciones_frase']))?mysql_real_escape_string($_GET['_traducciones_frase']):"";
$_traducciones_idioma = (isset($_GET['_traducciones_idioma']))?mysql_real_escape_string($_GET['_traducciones_idioma']):"";
$_traducciones_traduccion = (isset($_GET['_traducciones_traduccion']))?mysql_real_escape_string($_GET['_traducciones_traduccion']):"";