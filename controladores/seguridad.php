<?php 
//Reanudamos la sesi贸n 
@session_start(); 
//Validamos si existe realmente una sesi贸n activa o no 

if($_SESSION["autentica"] != "sip"){ 
  //Si no hay sesi贸n activa, lo direccionamos al index.php (inicio de sesi贸n) 
  header("Location:../vistas/creo_login.php"); 
  exit(); 
} 
?>