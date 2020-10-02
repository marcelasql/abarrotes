<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>consulto articulos</title>
        
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
        <br><h2>CONSULTO ARTICULOS</h2><br>
    </center>
    
    <div class="container">  
    <?php
    include '../modelo/crud.php';
    $conecto=new crud();
    $conecto->conectar();
    $query = $conecto->consultar_todos('articulos');

     if($query->num_rows>0){
                      
    ?>
        
        <table class="table">
            <tr>
                <th>Codigo</th>
                <th>Nombre</th>
                <th>Cantidad</th>
                <th>Precio</th>
                <th>Fecha</th>
                <th>Accion 1</th>
                
               <?php  
             @session_start();
             if($_SESSION["idrol"]!=30){?>  
                <th>Accion 2</th>
             <?php } ?> 
            </tr>
            
            <?php 
            for ($i=0;$i<$r=$query->fetch_array();$i++){
            ?>
            <tr>
                <td>
                 <?php echo ' '.$r['codigo']?>   
                </td>
                
                <td>
                 <?php echo ' '.$r['nombre']?>   
                </td>
                
                <td>
                 <?php echo ' '.$r['cantidad']?>   
                </td>
                
                <td>
                 <?php echo ' '.$r['precio']?>   
                </td>
                
                <td>
                 <?php echo ' '.$r['fecha']?>   
                </td>
                
                <td>
                    
                    <a 
                        href="../vistas/edito_articulos.php?codigo=<?php echo $r["codigo"];?>" 
                        class="btn btn-sm btn-warning">Editar 
                    </a>
                    
                    
                </td>
               
                
               <?php 
               //ESTO DESAPARECE EL BOTON ELIMINAR PARA LA SECRE
             
             if($_SESSION["idrol"]!=30){?> 
                <td>
                    
                    <a href="#" id="del-<?php echo $r["codigo"];?>" 
                    class="btn btn-sm btn-danger">Eliminar
                    </a>

                    <script>
                    $("#del-"+<?php echo $r["codigo"];?>).click(function(e)
                    {
                    e.preventDefault();
                    p = confirm("Estás seguro de eliminar?");
                    if(p)
                    {
                     window.location="../controladores/eliminar.php?codigo="+<?php echo $r["codigo"];?>;
                    }
                    });
                    </script>
                    
                </td>
            <?php } ?>
            </tr>
            <?php
            }
            ?>
        </table> 
    
    <?php
         
    }else
    {
    ?>
    
    <p class='alert alert-info'>No Hay Articulos</p>
    
    <?php
    }
    ?>
        
    <center>
        <a class="btn btn-info" href="creo_articulos.php">Atras</a>
    </center>  
</div>    
    </body>
</html>
