<?php
session_start(); 			   
include "../admin/bd.php";
include "../admin/coneccion.php";
$_SESSION = array(); 

header("Location: z_index.php");    