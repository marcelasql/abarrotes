<?php
include 'seguridad.php';

//Reanudamos la sesion 
session_start(); 

//Literalmente la destruimos 
session_destroy(); 

//Redireccionamos a index.php (al inicio de sesion) 
header("Location:../vistas/creo_login.php"); 
?>