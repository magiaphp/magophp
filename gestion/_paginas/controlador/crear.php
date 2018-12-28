<?php

if (isset($_REQUEST['a']) == 'crear') {
    include "./_paginas/reg/post.php";
    include "./_paginas/modelos/crear.php";
    
    redireccion("index.php?p=_paginas");
    
} else {
    include "./_paginas/vista/crear.php";
}