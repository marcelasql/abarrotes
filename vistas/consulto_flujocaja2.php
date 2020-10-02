<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>Contabilidad / Flujo Caja</title>
        
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
        <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
    </head>
    <body>
     <?php 
   //Esta linea prohibe mostrar el formulario con trampa en el link sin iniciar sesion
   include("../controladores/seguridad.php");?>
     <center>
        <br><h1 style="color:blue">ABARROTES CHILE</h1><br>
        <br><h2>CONTABILIDAD / FLUJO DE CAJA</h2><br>
    </center>
    
   <!-- <div class="container">   -->
    //<?php
//    include '../modelo/crud.php';
//    $conecto=new crud();
//    $conecto->conectar();
//    $query = $conecto->consultar_todos('articulos');
//
//     if($query->num_rows>0){
//                      
//    ?>
        
        <table class="table">
            <tr>
                <th>Detalle</th>
                <th>Enero</th>
                <th>Febrero</th>
                <th>Marzo</th>
                <th>Abril</th>
                <th>Mayo</th>
                <th>Junio</th>
                <th>Julio</th>
                <th>Agosto</th>
                <th>Septiembre</th>
                <th>Octubre</th>
                <th>Noviembre</th>
                <th>Diciembre</th>
            </tr>
            
         
            <?php
          
            ?>
        </table> 
    
   
<!--            <div class="col-lg-6 col-sm-6 col-md-6">
                 <br> 
                 <input 
                     style="text-align: center" 
                     class="btn btn-success btn-block" 
                     type="submit" 
                     value="Consulta Flujo Caja">  
             </div>    -->
     <div class="col-lg-6 col-sm-6 col-md-6">
                <center>
                    <a class="btn btn-block btn-info" href="menu.php">Atras</a>
                </center>
     </div>
    
<!--    <center>
        <a class="btn btn-info" href="creo_articulos.php">Atras</a>
    </center>  -->
</div>    
    </body>
</html>
